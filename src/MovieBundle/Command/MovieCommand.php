<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 9/7/15
 * Time: 17:11
 */

namespace MovieBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MovieCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('list:movies')
            ->setDescription('List Movies')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $r=$this->getContainer()->get('movies_service')->getAllMovies();

        if($r){
            $text="\nList of the Movies:";
            foreach($r as $l){
                $text.="\n\t".$l->getTitle()." directed by ".$l->getDirector()->getName()."\n";
            }
            $output->writeln($text);
        }

    }
}