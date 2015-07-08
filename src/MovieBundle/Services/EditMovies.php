<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 5:06
 */

namespace MovieBundle\Services;

use Doctrine\ORM\EntityManager;

class EditMovies {

    private $em;

    public function __construct(EntityManager $em)
    {
        $this -> em = $em;
    }
}