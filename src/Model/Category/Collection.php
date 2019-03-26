<?php
/**
 *
 * User: Elena Kupriiets
 * Date: 26.03.19
 */

namespace App\Model\Category;


class Collection implements \IteratorAggregate
{
    private $categories;

    public function __construct(CategoryModel ...$categories)
    {
        $this->categories = $categories;
    }

    public function addCategory(CategoryModel $category)
    {
        $this->categories[] = $category;
    }

    public function getIterator(): iterable
    {
        return new \ArrayIterator($this->categories);
    }

    public function getBySlug(string $slug):CategoryModel
    {
        foreach($this->categories as $category){

        }
    }
}