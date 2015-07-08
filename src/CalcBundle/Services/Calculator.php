<?php

namespace CalcBundle\Services;

use CalcBundle\Entity\Operation;
use Doctrine\ORM\EntityManager;

class Calculator
{

    private $em;

    public function __construct(EntityManager $em)
    {
        $this -> em = $em;
    }

    public function CalcSum($x, $y)
    {
        $op = new Operation();
        $op->setFirstOperator($x);
        $op->setLastOperator($y);

        $r = $x + $y;

        $op->setAction('CalcSum');
        $op->setResult($r);

        $this->em->persist($op);
        $this->em->flush();

        return $r;
    }
    public function CalcRes($x, $y)
    {
        $op = new Operation();
        $op->setFirstOperator($x);
        $op->setLastOperator($y);

        $r = $x - $y;

        $op->setAction('CalcRes');
        $op->setResult($r);

        $this->em->persist($op);
        $this->em->flush();

        return $r;
    }
    public function CalcMul($x, $y)
    {
        $op = new Operation();
        $op->setFirstOperator($x);
        $op->setLastOperator($y);

        $r = $x * $y;

        $op->setAction('CalcMul');
        $op->setResult($r);

        $this->em->persist($op);
        $this->em->flush();

        return $r;
    }
    public function CalcDiv($x, $y)
    {
        $op = new Operation();
        $op->setFirstOperator($x);
        $op->setLastOperator($y);

        $r = $x / $y;

        $op->setAction('CalcDiv');
        $op->setResult($r);

        $this->em->persist($op);
        $this->em->flush();

        return $r;
    }
}