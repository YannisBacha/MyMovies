<?php

namespace MyMovies\DAO;

use MyMovies\Domain\Movie;

class MovieDAO extends DAO
{
    /**
     * Return all movies
     *
     * @return array A list of all movies.
     */
    public function findAll() {
        $sql = "select * from movie order by mov_id";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $movies = array();
        foreach ($result as $row) {
            $MovieId = $row['mov_id'];
            $movies[$MovieId] = $this->buildDomainObject($row);
        }
        return $movies;
    }

    /**
     * Creates an Movie object based on a DB row.
     *
     * @param array $row The DB row containing Movie data.
     * @return \MyMovies\Domain\Movie
     */
    protected function buildDomainObject($row) {
        $mov = new Movie();
        $mov->setMovId($row['mov_id']);
        $mov->setMovTitle($row['mov_title']);
        $mov->setMovDescriptionShort($row['mov_description_short']);
        $mov->setMovDescriptionLong($row['mov_description_long']);
        $mov->setMovDirector($row['mov_director']);
        $mov->setMovYear($row['mov_year']);
        $mov->setMovImage($row['mov_image']);
        $mov->setCatId($row['cat_id']);
        return $mov;
    }

    /**
     * Return an movie
     *
     * @param string $id
     *
     * @return \MyMovie\Domain\Movie|throws an exception if no matching article is found
     */
    public function find($id) {
        $sql = "select * from movie where mov_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("Nothing find with this id : " . $id);
    }
}