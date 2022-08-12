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


use App\Controller\MachinesController;
use App\Controller\PanneController;

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
    public function add(ManagerRegistry $doctrine, Request $request): Response
    {
		$newMach= new Machine;
		$form = $this->createForm(MachineType::class, $newMach);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
		    /* dump($request);*/
            $newMach = $form->getData();
			$em=$doctrine->getManager();
			$em->persist($newMach);
			$em->flush();
            $this->addFlash(
                'notice',
                'Nouvelle machine ajoutée à la liste !'
        );
	    return $this->redirectToRoute('machine_add');
        } 
		return $this->render('machine/add.html.twig', [          
		   'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/machine", name="machine")
     */
    public function index(ManagerRegistry $doctrine ): Response
    {		
         $machines=$doctrine->getRepository(Machine::class)->findAll(); 
         return $this->render('machine/machine.html.twig', [
            'controller_name' => 'MachinesController',
            'machines'=> $machines,            
        ]);
    }
}