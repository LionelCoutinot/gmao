<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourbeController extends AbstractController
{
    /**
     * @Route("/courbe", name="courbe")
     */
    public function courbe()
    {
        return $this->render('courbe/index.html.twig');
    }
}