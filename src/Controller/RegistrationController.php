<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response /* Fonction permettant à un nouvel utilisateur de s'enregistrer à partir d'un formulaire  */
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user); /* Création du formulaire */
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { /* Vérification que le formulaire est valide et  soumis */
            // encode the plain password
            $user->setPassword(
            $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);  /* Envoi de l'entité à l'entity manager  */ 
            $entityManager->flush(); /* Exécution de la requête */
            // do anything else you need here, like send an email
            $this->addFlash( /*Notice de réussite */
                'notice',
                'Nouvel utilisateur enregistré !'
        );
            return $this->redirectToRoute('app_register'); /* Redirection. Ici, on reste sur la même page une fois la fonction exécutée */
        }

        return $this->render('registration/register.html.twig', [   /* Envoi des données au fichier  template  Twig concerné */
            'registrationForm' => $form->createView(),
        ]);
    }
}
