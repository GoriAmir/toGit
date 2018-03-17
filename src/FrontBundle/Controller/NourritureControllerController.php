<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NourritureControllerController extends Controller
{
    /**
     * @Route("/nourriture")
     */
    public function listerNourritureAction()
    {
        return $this->render('FrontBundle:NourritureController:nourriture.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/nourriture/ajouter")
     */
    public function ajouterNourritureAction()
    {
        return $this->render('FrontBundle:NourritureController:ajouter_nourriture.html.twig', array(
            // ...
        ));
    }

}
