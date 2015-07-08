<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 3:07
 */

namespace MovieBundle\Services;

use Doctrine\ORM\EntityManager;

class CreateMovie
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this -> em = $em;
    }

}