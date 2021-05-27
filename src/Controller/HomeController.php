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
        $project->setDescription('Description');
        $project->setUrl("https://url.com");
        $project->setImgName("img");
        $project->setImgAlt("alt img");
        $project->getImgTitle("title img");

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