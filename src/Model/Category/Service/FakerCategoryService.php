<?php
/**
 *
 * User: Elena Kupriiets
 * Date: 26.03.19
 */

namespace App\Model\Category\Service;

use App\Model\Category\Collection;
use App\Model\Category\CategoryModel;

class FakerCategoryService implements ServiceCategoryInterface
{
    private $categoriesLimit;
    private $faker;

    public function __construct()
    {

        $this->faker = \Faker\Factory::create();

    }

    public function getCategories(): Collection
    {
        $collection = new Collection();

        for ($i = 0; $i < 7; $i++) {
            $category = new CategoryModel(
                $this->faker->randomDigit,
                $this->faker->word,
                $this->faker->randomElement(['World', 'Sport', 'IT', 'Science'])
            );
            $collection->addCategory($category);
        }
        return $collection;

    }


    public function getCategoryBySlug(string $slug): CategoryModel
    {
        $category = new CategoryModel(
            $this->faker->randomDigit,
            $slug,
            \ucfirst($slug)
        );

        return $category;
    }
}