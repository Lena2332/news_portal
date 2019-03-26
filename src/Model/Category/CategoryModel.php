<?php
/**
 *
 * User: Elena Kupriiets
 * Date: 26.03.19
 */

namespace App\Model\Category;


class CategoryModel
{
   private $id;
   private $slug;
   private $title;

    public function __construct(
        int $id,
        string $slug,
        string $title
    )
    {
        $this->id = $id;
        $this->slug = $slug;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

}