<?php

namespace CorredoresRioja\UI\RunnersBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CorredoresRioja\UI\RunnersBundle\Transformers;

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
        return $this->render("RunnersBundle:Users:profile.html.twig");
    }
    
    public function signupAction()
    {
        $peticion = $this->getRequest();
        $form = $this->createForm(new Transformers\RunnerType());
        $form->handleRequest($peticion);
        if ($form->isValid()) {
            // Recogemos el corredor que se ha registrado
            $runner = $form->getData();
            // Codificamos la contraseña del corredor
            $encoder = $this->get('security.encoder_factory')->getEncoder($runner);
            $password = $encoder->encodePassword($runner->getPassword(), $runner->getSalt());
            
            // Lo almacenamos en nuestro repositorio de corredores
            $this->get('runnerrepository')->createNewRunner($runner);
            
            // Reedirigimos al usuario a la portada
            return $this->redirect ($this->generateUrl('homepage'));
        }
        return $this->render("RunnersBundle:Users:signup.html.twig", 
                array('formulario' => $form->createView()));
    }
}

