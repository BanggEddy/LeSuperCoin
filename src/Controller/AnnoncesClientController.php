<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Form\Annonces1Type;
use App\Repository\AnnoncesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\User;

#[Route('/annonces/client')]
class AnnoncesClientController extends AbstractController
{
    #[Route('/', name: 'app_annonces_client_index', methods: ['GET'])]
    public function index(AnnoncesRepository $annoncesRepository, Security $security): Response
    {
        // Obtenez l'utilisateur actuel
        $user = $security->getUser();

        // Assurez-vous que l'utilisateur est connecté
        if ($user) {
            // Récupérez les annonces liées à l'utilisateur actuel
            $annonces = $annoncesRepository->findBy(['utilisateur' => $user]);
        } else {
            // Si l'utilisateur n'est pas connecté, vous pouvez gérer cela selon vos besoins
            $annonces = [];
        }

        return $this->render('annonces_client/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }

    #[Route('/new', name: 'app_annonces_client_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        $annonce = new Annonces();

        // Obtenez l'utilisateur actuel
        $user = $security->getUser();

        // Assurez-vous que l'utilisateur est connecté
        if ($user) {
            // Associez automatiquement l'utilisateur à l'annonce
            $annonce->setUtilisateur($user);

            // Créez un tableau de choix avec uniquement l'utilisateur actuel
            $usersChoices = [$user];
        } else {
            // Si l'utilisateur n'est pas connecté, vous pouvez gérer cela selon vos besoins
            $usersChoices = [];
        }

        $form = $this->createFormBuilder($annonce)
            ->add('title')
            ->add('price')
            ->add('content')
            ->add('createdat')
            ->add('updatedat')
            ->add('utilisateur', EntityType::class, [
                'class' => User::class,
                'choices' => $usersChoices,
                'choice_label' => 'no',
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($annonce);
            $entityManager->flush();

            return $this->redirectToRoute('app_annonces_client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('annonces_client/new.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_annonces_client_show', methods: ['GET'])]
    public function show(Annonces $annonce): Response
    {
        return $this->render('annonces_client/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_annonces_client_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Annonces $annonce, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Annonces1Type::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_annonces_client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('annonces_client/edit.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_annonces_client_delete', methods: ['POST'])]
    public function delete(Request $request, Annonces $annonce, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$annonce->getId(), $request->request->get('_token'))) {
            $entityManager->remove($annonce);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_annonces_client_index', [], Response::HTTP_SEE_OTHER);
    }
}
