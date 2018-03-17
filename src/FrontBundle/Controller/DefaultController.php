<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $repas = $this->getDoctrine()->getRepository('FrontBundle:Nourriture')->findAll();

        return $this->render('@Front/Default/index.html.twig', array('listeRepas' => $repas));
    }
}
