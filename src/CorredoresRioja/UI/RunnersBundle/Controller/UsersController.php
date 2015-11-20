<?php

namespace CorredoresRioja\UI\RunnersBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername=$authenticationUtils->getLastUsername();
        
        return $this->render(
        'RunnersBundle:Users:login.html.twig',
            array('last_username'=>$lastUsername,'error' =>$error)
        );
    }
    
    public function myProfileAction()
    {
        
    }
}

