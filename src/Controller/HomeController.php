<?php

namespace App\Controller;

use App\Repository\OptredenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(OptredenRepository $optredenRepository)
    {
        return $this->render('home/index.html.twig', [
            'optredens' => $optredenRepository->findAll(),
            'controller_name' => 'HomeController',
        ]);
    }
}
