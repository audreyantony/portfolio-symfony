<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     * @param ProjectsRepository $projectsRepository
     * @return Response
     */
    public function home(ProjectsRepository $projectsRepository)
    {

        return $this->render("public/home_portfolio.html.twig",[
            "permission"=> "public",
            "projects"=>$projectsRepository->findAll()
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