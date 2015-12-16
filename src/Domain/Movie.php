<?php

namespace MyMovies\Domain;

class Movie
{
    /**
     * Movie id
     *
     * @var int
     */
    private $mov_id;

    /**
     * Movie title.
     *
     * @var string
     */
    private $mov_title;

    /**
     * Movie short desciption.
     *
     * @var string
     */
    private $mov_description_short;

    /**
     * Movie long desciption.
     *
     * @var string
     */
    private $mov_description_long;

    /**
     * Movie director.
     *
     * @var string
     */
    private $mov_director;

    /**
     * Movie year.
     *
     * @var int
     */
    private $mov_year;

    /**
     * Movie images.
     *
     * @var string
     */
    private $mov_image;

    /**
     * Movie Category.
     *
     * @MyMovie\Domain\Category
     */
    private $cat_id;

    /**
     * @return int
     */
    public function getMovId()
    {
        return $this->mov_id;
    }

    /**
     * @param int $mov_id
     * @return Movie
     */
    public function setMovId($mov_id)
    {
        $this->mov_id = $mov_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMovTitle()
    {
        return $this->mov_title;
    }

    /**
     * @param string $mov_title
     */
    public function setMovTitle($mov_title)
    {
        $this->mov_title = $mov_title;
    }

    /**
     * @return string
     */
    public function getMovDescriptionShort()
    {
        return $this->mov_description_short;
    }

    /**
     * @param string $mov_description_short
     */
    public function setMovDescriptionShort($mov_description_short)
    {
        $this->mov_description_short = $mov_description_short;
    }

    /**
     * @return string
     */
    public function getMovDescriptionLong()
    {
        return $this->mov_description_long;
    }

    /**
     * @param string $mov_description_long
     */
    public function setMovDescriptionLong($mov_description_long)
    {
        $this->mov_description_long = $mov_description_long;
    }

    /**
     * @return string
     */
    public function getMovDirector()
    {
        return $this->mov_director;
    }

    /**
     * @param string $mov_director
     */
    public function setMovDirector($mov_director)
    {
        $this->mov_director = $mov_director;
    }

    /**
     * @return int
     */
    public function getMovYear()
    {
        return $this->mov_year;
    }

    /**
     * @param int $mov_year
     */
    public function setMovYear($mov_year)
    {
        $this->mov_year = $mov_year;
    }

    /**
     * @return string
     */
    public function getMovImage()
    {
        return $this->mov_image;
    }

    /**
     * @param string $mov_image
     */
    public function setMovImage($mov_image)
    {
        $this->mov_image = $mov_image;
    }

    /**
     * @return mixed
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * @param mixed $cat_id
     */
    public function setCatId($cat_id)
    {
        $this->cat_id = $cat_id;
    }


}