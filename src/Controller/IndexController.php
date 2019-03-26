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
use App\Model\Post\Service\ServiceInterface;

class IndexController extends AbstractController
{
    /**
     * @Route("/",  name="index")
     */
    public function index(ServiceInterface $postService): Response
    {

        $posts = $postService->getPosts();
        return $this->render('index/index.html.twig', [
            'posts' => $posts,
        ]);
    }

}