<?php

namespace MyMovies\DAO;

use MyMovies\Domain\Category;

class CategoryDAO extends DAO
{
    /**
     * Return all categories
     *
     * @return array A list of all categories.
     */
    public function findAll() {
        $sql = "select * from category order by cat_name";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $categories = array();
        foreach ($result as $row) {
            $CategoryId = $row['codeCat'];
            $categories[$CategoryId] = $this->buildDomainObject($row);
        }
        return $categories;
    }
    
    /**
     * Creates an Category object based on a DB row.
     *
     * @param array $row The DB row containing Category data.
     * @return \MyMovie\Domain\Category
     */
    protected function buildDomainObject($row) {
        $cat = new Category();
        $cat->setCatId($row['cat_id']);
        $cat->setCatName($row['cat_name']);
        return $cat;
    }
    
    /**
     * Return an category
     *
     * @param string $id
     *
     * @return \MyMovies\Domain\Category|throws an exception if no matching article is found
     */
    public function find($id) {
        $sql = "select * from category where cat_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("Nothing find with this id : " . $id);
    }
}