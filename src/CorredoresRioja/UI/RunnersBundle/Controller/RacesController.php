<?php

namespace CorredoresRioja\UI\RunnersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RacesController extends Controller
{
    public function indexAction()
    {
        //this would be so much better with pagination!
        $racesDisputed = $this->get('racerepository')->getDisputedRaces();
        $racesNonDisputed = $this->get('racerepository')->getNonDisputedRaces();
        
        return $this->render('RunnersBundle:Races:index.html.twig',
                            array('racesDisputed' => $racesDisputed, 
                                  'racesNonDisputed' => $racesNonDisputed));
    }
    
    public function showRaceAction($slug)
    {
        $race = $this->get('racerepository')->getRaceBySlug($slug);
        
        $alreadySubscribed = false;
        if ($this->get('security.context')->isGranted('ROLE_RUNNER')) 
        {
            $userId = $this->get('security.context')->getToken()->getUser()->getId();
            $alreadySubscribed= $this->get('participantrepository')->isRunnerAlreadyRegistered($userId, $race->getId());
        }
        
        //si ya ha sido la fecha de la carrera entonces pillo de particpants, ya sea clasificacions o inscritos
        $participants = $this->get('participantrepository')->getParcipantsInRace($race->getId());
        
        return $this->render('RunnersBundle:Races:race.html.twig',
                array( 'race' => $race, 
                       'participants' =>  $participants,
                       'alreadySubscribed' => $alreadySubscribed));
    }
    
    public function myRacesAction()
    {
        //todo change this
        
        $racesDisputed = $this->get('racerepository')->getDisputedRaces();
        $racesNonDisputed = $this->get('racerepository')->getNonDisputedRaces();
        
        return $this->render('RunnersBundle:Races:index.html.twig',
                            array('racesDisputed' => $racesDisputed, 
                                  'racesNonDisputed' => $racesNonDisputed));
    }
}
