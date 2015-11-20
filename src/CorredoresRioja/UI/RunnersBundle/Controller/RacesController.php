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
        //clasificaciones o inscritos..?¿
        return $this->render('RunnersBundle:Races:race.html.twig',array( 'race' => $race ));
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
