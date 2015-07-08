<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 2:01
 */

namespace MovieBundle\Entity;


class Person {
    protected $id;
    protected $name;
    protected $movies;
    protected $moviesDirected;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getMovies()
    {
        return $this->movies;
    }
    /**
     * @param mixed $movies
     */
    public function setMovies($movies)
    {
        $this->movies = $movies;
    }
    /**
     * @return mixed
     */
    public function getMoviesDirected()
    {
        return $this->moviesDirected;
    }
    /**
     * @param mixed $moviesDirected
     */
    public function setMoviesDirected($moviesDirected)
    {
        $this->moviesDirected = $moviesDirected;
    }

}