<?php

namespace App\Controller;

use App\Entity\Artiest;
use App\Repository\OptredenRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(OptredenRepository $optredenRepository , ManagerRegistry $registry)
    {

        $artiest = $registry->getRepository(artiest::class);
        return $this->render('home/index.html.twig', [
            'optredens' => $optredenRepository->findAll(),
            'controller_name' => 'HomeController','artiest' => $artiest,
        ]);
    }
}
