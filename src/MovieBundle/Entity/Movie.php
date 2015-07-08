<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 8/7/15
 * Time: 2:01
 */

namespace MovieBundle\Entity;


class Movie {
    protected $id;
    protected $title;
    protected $imdbLink;
    protected $youtubeLink;
    protected $description;
    protected $rating;
    protected $producer;
    protected $actors;
    protected $director;
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
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * @return mixed
     */
    public function getImdbLink()
    {
        return $this->imdbLink;
    }
    /**
     * @param mixed $imdbLink
     */
    public function setImdbLink($imdbLink)
    {
        $this->imdbLink = $imdbLink;
    }
    /**
     * @return mixed
     */
    public function getYoutubeLink()
    {
        return $this->youtubeLink;
    }
    /**
     * @param mixed $youtubeLink
     */
    public function setYoutubeLink($youtubeLink)
    {
        $this->youtubeLink = $youtubeLink;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }
    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }
    /**
     * @return mixed
     */
    public function getProducer()
    {
        return $this->producer;
    }
    /**
     * @param mixed $producer
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;
    }
    /**
     * @return mixed
     */
    public function getActors()
    {
        return $this->actors;
    }
    /**
     * @param mixed $actors
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
    }
    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }
    /**
     * @param mixed $director
     */
    public function setDirector($director)
    {
        $this->director = $director;
    }
}