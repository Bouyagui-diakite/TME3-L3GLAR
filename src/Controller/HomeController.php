<?php

namespace App\Controller;

use App\Entity\Vol;
use App\Repository\VolRepository;
use App\Form\VolFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home", methods={"GET"})
     */
    public function index(VolRepository $volrepository): Response
    {
        $pins = $volrepository->findBy([],  ['numeroVol' => 'DESC']);
        return $this->render('home/index.html.twig', compact("pins"));
    }


     /**
     * @Route("/login", name="app_login")
     */
    public function LogIn(): Response
    {
        return $this->render('home/logIn.html.twig');
    }


     /**
     * @Route("/signIn", name="app_signIn")
     */
    public function SignIn(): Response
    {
        return $this->render('home/signIn.html.twig');
    }


     /**
     * @Route("/reservation", name="app_reservation" , methods={"GET", "POST"})
     */
    public function vol(Request $req, EntityManagerInterface $em)
    {
        $vol = new Vol();
        $form = $this->createForm(VolFormType::class, $vol);

        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {
            $this->addFlash('success', "Vol reserve avec succes");
            $pin = $form->getData();
            $em->persist($vol);
            $em->flush();

            return $this->redirectToRoute("app_home");


        }

        return $this->render("home/reservation.html.twig", [

            'form_sub' => $form->createView()

        ]);
    }


}