<?php

namespace App\Controller\Admin;

use App\Entity\Machine;
use App\Entity\Criticite;
use App\Entity\Arret;
use App\Entity\Panne;
use App\Entity\Typeintervention;
use App\Entity\Typepanne;
use App\Entity\Utilisateur;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig'); // Chemin vers la page personnalisée pour la page d'accueil de " l'admin "
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gmao');
    }

    public function configureMenuItems(): iterable  // Appel des différents menus disponibles de la page  de  " l'administration "
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-list', Utilisateur::class);
        yield MenuItem::linkToCrud('Machine', 'fas fa-list', Machine::class);
        yield MenuItem::linkToCrud('Intervention maintenance', 'fas fa-list', Panne::class);
        yield MenuItem::linkToCrud('Arrêt', 'fas fa-list', Arret::class);
        yield MenuItem::linkToCrud('Criticité', 'fas fa-list', Criticite::class);
        yield MenuItem::linkToCrud('Type d\'intervention', 'fas fa-list', Typeintervention::class);
        yield MenuItem::linkToCrud('Type de panne', 'fas fa-list', Typepanne::class);
    }
}
