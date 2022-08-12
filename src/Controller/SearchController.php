<?php

namespace App\Controller;


use App\Entity\Machine;
use App\Entity\Panne;
use App\Entity\Arret;
use App\Entity\Criticite;
use App\Entity\Typeintervention;
use App\Entity\Typepanne;

use App\Repository\MachineRepository;
use App\Repository\PanneRepository;
use App\Repository\ArretRepository;
use App\Repository\CriticiteRepository;

use App\Data\SearchData;
use App\Form\PanneType;
use App\Form\SearchForm;
use App\Controller\PanneController;
use App\Controller\MachineController;


use Doctrine\ORM\PersistentCollection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\Admin\FileUploadType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OC\PlatformBundle\Form\AdvertType;
use Symfony\Component\Form\FormView;


class SearchController extends AbstractController
{   

    /**
     * @Route("/search", name="search")
     */
    public function search(PanneRepository $repository, Request $request)
    {
        $data = new SearchData();       
        $form = $this->createForm(SearchForm::class, $data);        
        $form->handleRequest($request); 
        $pannes=$repository->findSearch($data); 

        return $this->render('search/index.html.twig', [
            'pannes' => $pannes,
            'form' => $form->createView(),   
        ]);
    }

}


  
   

