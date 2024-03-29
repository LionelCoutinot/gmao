<?php
namespace App\Controller;

use App\Entity\Machine;
use App\Form\MachineType;
use App\Entity\Panne;
use App\Entity\Arret;
use App\Entity\Criticite;
use App\Entity\Typeintervention;
use App\Entity\Typepanne;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MachineRepository;
use App\Repository\PanneRepository;




use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MachinesController extends AbstractController
{

    /**
     * @Route("/machine/new", name="machine_add")
     */
    public function add(ManagerRegistry $doctrine, Request $request): Response /* Ajout d'une machine */
    {
		$newMach= new Machine;
		$form = $this->createForm(MachineType::class, $newMach);  /* Création du formulaire */
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) { /* Condition vérifiant que le formulaire est valide et soumis */
		    /* dump($request);*/
            $newMach = $form->getData();
			$em=$doctrine->getManager(); /* On récupère l'entity manager */   
			$em->persist($newMach); /*  Notre entité est envoyée à l'entity manager  */  
			$em->flush(); /* On exécute la requête */
            $this->addFlash( /* Notice de réussite */
                'notice',
                'Nouvelle machine ajoutée à la liste !'
        );
	    return $this->redirectToRoute('machine_add');
        } 
		return $this->render('machine/add.html.twig', [    /* Envoi des données au fichier  template  Twig concerné */       
		   'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/machine", name="machine")
     */
    public function index(ManagerRegistry $doctrine ): Response /* Fonction permettant de visualiser le parc des machines*/
    {		
        $machines=$doctrine->getRepository(Machine::class)->findAll(); /* Récupération des machines telles qu'elles sont enregistrés dans la BDD */
        return $this->render('machine/machine.html.twig', [
            'controller_name' => 'MachinesController',
            'machines'=> $machines,            
        ]);
    }
}