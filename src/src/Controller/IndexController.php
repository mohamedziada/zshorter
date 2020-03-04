<?php


namespace App\Controller;


use App\Entity\Link;
use App\Form\LinkType;
use App\Repository\LinkRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage", methods={"GET"})
     */
    public function index(Request $Request): Response
    {
        return $this->render('index.html.twig', [

        ]);
    }

    /**
     * @Route("/api", name="home_api", methods={"GET"})
     */
    public function homeapi(Request $Request): Response
    {
        return $this->json([
            'key' => 'hello world'
        ],200);
    }
}