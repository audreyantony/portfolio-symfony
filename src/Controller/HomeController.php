<?php

namespace App\Controller;

use App\Entity\Projects;
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
        $project = new Projects();
        $project->setTitle('Title');
        $project->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet tincidunt odio. Fusce imperdiet cursus felis a lacinia. Quisque sagittis finibus ex, at faucibus mi ornare quis. Duis eu purus vitae libero rutrum blandit.');
        $project->setUrl("https://url.com");
        $project->setImgName("https://via.placeholder.com/250x100/0E0F0B/656E40?Text=Placeholder");
        $project->setImgAlt("alt img");
        $project->setImgTitle("title img");

        return $this->render("public/home_portfolio.html.twig",[
            "permission"=> "public",
            "project"=>$project
        ]);
    }

    /**
     * @Route("/admin-home", name="admin home")
     */
    public function adminHome()
    {
        return $this->render("admin/home_admin_portfolio.html.twig",[
            "permission"=> "admin",
            "hello"=>'coucou'
        ]);
    }

}