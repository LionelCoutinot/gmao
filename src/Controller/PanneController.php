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

use App\Form\PanneType;

use Doctrine\ORM\PersistentCollection;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\Admin\FileUploadType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class PanneController extends AbstractController
{   

    /**
     * @Route("/panne/new", name="panne_add")
     */
    public function add(ManagerRegistry $doctrine, Request $request): Response /* Ajout au niveau de la BDD d'une nouvelle panne*/
    {
		$newPanne= new Panne;
		$form = $this->createForm(PanneType::class, $newPanne); /* Création du formulaire  */
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) { /* Vérification que le formulaire est valide et soumis */
		    /* dump($request);*/
            $newPanne = $form->getData();           
			$em=$doctrine->getManager();  /* Récupération de l'entity manager   */  
			$em->persist($newPanne);  /* Envoi de l'entité à l'entity manager  */ 
			$em->flush();      /* exécution de la requête  */      
            $this->addFlash( /* Notice de réussite*/
                'notice',
                'Nouvelle intervention ajoutée à la liste !'
        );
	    return $this->redirectToRoute('panne_add');
        } 
		return $this->render('panne/add.html.twig', [     /* Envoi des données au fichier  template  Twig concerné */        
		   'form' => $form->createView(),
           'newPanne' => $newPanne,
        ]);
    }



     /**
    * @Route("/panne/{id}", name="panne")
    */
   public function single(ManagerRegistry $doctrine, $id): Response /* Fonction permettant de récupérer en bDD les pannes en fonction de l'" id " de la machine */
   {
       $machine=$doctrine->getRepository(Machine::class)->find($id);
       $panne=$machine->getPannes();
       

       return $this->render('panne/panne.html.twig', [
           'controller_name' => 'PanneController',
           'machine' =>$machine,
           'pannes'=>$panne,
        ]);
   }
  
}


  
   

