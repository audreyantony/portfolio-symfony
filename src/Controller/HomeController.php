<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render("public/home_portfolio.html.twig",["mot"=>"Bonjour", "nom"=>"Audrey"]);
    }

    /**
     * @Route("/params/{name}", name="name", defaults={"name": "Huguette"}, methods={"GET"})
     * @param string $name
     * @return Response
     */
    public function params(string $name)
    {
        return new Response("Boujour toi : $name");
    }

}