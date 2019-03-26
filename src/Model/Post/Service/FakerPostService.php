<?php

namespace App\Model\Post\Service;

use App\Model\Post\Collection;
use App\Model\Post\PostModel;

final class FakerPostService implements ServiceInterface
{
    private $postsLimit;
    private $faker;
    public function __construct(int $postsLimit)
    {
        $this->postsLimit = $postsLimit;
        $this->faker = \Faker\Factory::create();

    }
    public function getPosts(): Collection
    {

        $collection = new Collection();

        for ($i = 0; $i < $this->postsLimit; $i++) {
            $post = new PostModel(
                $this->faker->randomDigit,
                $this->faker->word,
                $this->faker->sentence,
                $this->faker->dateTime,
                $this->faker->randomElement(['World', 'Sport', 'IT', 'Science'])
            );
            $post->setDescription($this->faker->sentence(30));
            $post->setImage($this->faker->imageUrl());
            $collection->addPost($post);
        }
        return $collection;
    }

    public function getPostBySlug($slug)
    {

    }
}