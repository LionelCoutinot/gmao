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

class ListageController extends AbstractController
{

    

    /**
     * @Route("/listage", name="listage")
     */
    public function index(ManagerRegistry $doctrine ): Response /* listing de toutes les pannes  */
    {		
         $pannes=$doctrine->getRepository(Panne::class)->findAll();  /* Récupération de toutes les pannes au niveau de la base de données et envoi vers le template concerné */
         return $this->render('panne/listage.html.twig', [
            'controller_name' => 'ListageController',
            'pannes'=> $pannes,            
        ]);
    }
}