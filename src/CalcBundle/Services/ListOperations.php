<?php

namespace CalcBundle\Services;

use CalcBundle\Entity\Operation;
use Doctrine\ORM\EntityManager;

class ListOperations
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getCalculations()
    {
        return $this->em->getRepository('CalcBundle:Operation')->findAll();
    }
}