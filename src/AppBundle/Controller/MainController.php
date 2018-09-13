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
        return $this->render('main/accueil.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/vie-de-la-guilde/organisation", name="organisation")
     */
    public function OrganisationAction()
    {
        return $this->render('main/organisation.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/vie-de-la-guilde/lieux-de-vie", name="lieux-de-vie")
     */
    public function LieuxDeVieAction()
    {
        return $this->render('main/lieux-de-vie.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/vie-de-la-guilde/on-recherche", name="on-recherche")
     */
    public function OnRechercheAction()
    {
        return $this->render('main/on-recherche.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/ambassade", name="ambassade")
     */
    public function AmbassadeAction()
    {
        return $this->render('main/ambassade.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
