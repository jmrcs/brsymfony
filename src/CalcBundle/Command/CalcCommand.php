<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 6/7/15
 * Time: 20:58
 */

namespace CalcBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CalcCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('demo:calc')
            ->setDescription('Calcula una suma')
            ->addArgument('x', InputArgument::OPTIONAL, 'Primer valor?')
            ->addArgument('y', InputArgument::OPTIONAL, 'Segundo valor?')
            ->addArgument('operation', InputArgument::OPTIONAL, 'Que operacion quieres hacer')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $x = $input->getArgument('x');
        $y = $input->getArgument('y');
        $operacion = $input->getArgument('operation');

        if ($operacion == "suma") {
            $r=$this->getContainer()->get('Calculadora')->CalcSum($x,$y);
        }
        if ($operacion == "resta"){
            $r=$this->getContainer()->get('Calculadora')->CalcRes($x,$y);
        }
        if ($operacion == "multiplica"){
            $r=$this->getContainer()->get('Calculadora')->CalcMul($x,$y);
        }
        if ($operacion == "divide"){
            $r=$this->getContainer()->get('Calculadora')->CalcDiv($x,$y);
        }

        $output->writeln($r);
    }
}