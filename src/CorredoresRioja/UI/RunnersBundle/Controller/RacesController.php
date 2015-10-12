<?php

namespace CorredoresRioja\UI\RunnersBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RacesController extends Controller
{
    /**
     * @Route("/carreras", name="carreras")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/races.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
