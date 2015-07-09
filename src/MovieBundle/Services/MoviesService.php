<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 14:46
 */

namespace MovieBundle\Services;

use MovieBundle\Entity\Movie;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityNotFoundException;

class MoviesService {

    private $em;

    public function __construct(EntityManager $em)
    {
        $this -> em = $em;
    }

    public function getAllMovies()
    {
        return $this->em->getRepository('MovieBundle:Movie')->findAll();
    }

    public function getMovie($id)
    {
        return $movie = $this->em->getRepository('MovieBundle:Movie')->find($id);
    }

}