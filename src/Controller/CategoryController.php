<?php
/**
 *
 * User: Elena Kupriiets
 * Date: 24.03.19
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Model\Category\Service\ServiceCategoryInterface;


class CategoryController  extends AbstractController
{
    /**
     * @Route("{slug}",requirements={
     *         "slug": "world|it|scince|sport"
     *     },name="category_item")
     */
    public function categoryItem(ServiceCategoryInterface $categoryService, $slug)
    {
        $category = $categoryService->getCategoryBySlug($slug);

        return $this->render('category/category.html.twig', [
            'category_data' => $category,
        ]);
    }

}