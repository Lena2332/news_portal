<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Model\Post\Service\ServiceInterface;

class PostController  extends AbstractController
{
    /**
     * @Route("category/{slug}",name="post_item")
     */
    public function postItem(ServiceInterface $postService, $slug)
    {
        $post = $postService->getPostBySlug($slug);
        return $this->render('post/post.html.twig', [
            'post_data' => $post,
        ]);
    }
}