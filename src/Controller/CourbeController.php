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
    public function courbe()  /* Cette fonction appelle le template de tracé de l'histogramme réalisé à partir d'un code javascript et html/twig */
    {
        return $this->render('courbe/index.html.twig');
    }
}