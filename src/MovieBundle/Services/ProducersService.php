<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 14:46
 */

namespace MovieBundle\Services;

use MovieBundle\Entity\Producer;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityNotFoundException;

class ProducersService {

    private $em;

    public function __construct(EntityManager $em)
    {
        $this -> em = $em;
    }

    public function getAllProducers()
    {
        return $this->em->getRepository('MovieBundle:Producer')->findAll();
    }

    public function getProducer($id)
    {
        return $producer = $this->em->getRepository('MovieBundle:Producer')->find($id);
    }

}