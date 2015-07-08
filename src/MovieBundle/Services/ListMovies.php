<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 2:56
 */

namespace MovieBundle\Services;

use MovieBundle\Entity\Movie;
use Doctrine\ORM\EntityManager;

class ListMovies {
    private $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function getAllMovies(){
        return $this->em->getRepository('MovieBundle:Movie')->findAll();
    }
}