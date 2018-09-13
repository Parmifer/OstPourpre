<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function AccueilAction()
    {
        return $this->render('AppBundle:Main:accueil.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/vie-de-la-guilde/organisation", name="organisation")
     */
    public function OrganisationAction()
    {
        return $this->render('AppBundle:Main:organisation.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/vie-de-la-guilde/lieux-de-vie", name="lieux-de-vie")
     */
    public function LieuxDeVieAction()
    {
        return $this->render('AppBundle:Main:lieux-de-vie.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/vie-de-la-guilde/on-recherche", name="on-recherche")
     */
    public function OnRechercheAction()
    {
        return $this->render('AppBundle:Main:on-recherche.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ambassade", name="ambassade")
     */
    public function AmbassadeAction()
    {
        return $this->render('AppBundle:Main:ambassade.html.twig', array(
            // ...
        ));
    }

}
