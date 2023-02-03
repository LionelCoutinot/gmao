<?php

namespace App\Controller;

use App\Repository\PanneRepository;


use App\Data\SearchData;
use App\Form\SearchForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class SearchController extends AbstractController
{   

    /**
     * @Route("/search", name="search")
     */
    public function search(PanneRepository $repository, Request $request) /* Fonction  permettant de filter les pannes selon divers critéres grâce au Query Builder mis en place dans " PanneRepository " */
    {
        $data = new SearchData();       
        $form = $this->createForm(SearchForm::class, $data);     /* Création du formulaire */   
        $form->handleRequest($request); 
        $pannes=$repository->findSearch($data);  /* Recherche en BDD des pannes selon les critères formulés */

        return $this->render('search/index.html.twig', [ /* Envoi des données récupérées au fichier  template  Twig concerné */ 
            'pannes' => $pannes,
            'form' => $form->createView(),   
        ]);
    }

}


  
   

