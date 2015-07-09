<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 14:46
 */

namespace MovieBundle\Services;

use MovieBundle\Entity\Person;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityNotFoundException;

class PersonsService {

    private $em;

    public function __construct(EntityManager $em)
    {
        $this -> em = $em;
    }

    public function getAllPersons()
    {
        return $this->em->getRepository('MovieBundle:Person')->findAll();
    }

    public function getPerson($id)
    {
        return $person = $this->em->getRepository('MovieBundle:Person')->find($id);
    }

}