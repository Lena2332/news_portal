<?php

namespace App\Model\Post\Service;

use App\Model\Post\Collection;

interface ServiceInterface
{

    public function getPosts(): Collection;


}