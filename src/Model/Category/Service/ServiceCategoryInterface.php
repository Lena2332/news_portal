<?php
/**
 *
 * User: Elena Kupriiets
 * Date: 26.03.19
 */

namespace App\Model\Category\Service;

use App\Model\Category\Collection;
use App\Model\Category\CategoryModel;

interface ServiceCategoryInterface
{
    public function getCategories(): Collection;
    public function getCategoryBySlug(string $slug): CategoryModel;
}