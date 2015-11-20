<?php

namespace CorredoresRioja\Infrastructure\Repositories\InMemory;
use CorredoresRioja\Domain\Repositories\ParticipantRepsitory;
use CorredoresRioja\Domain\Model\Race;
use CorredoresRioja\Domain\Model\Runner;
use CorredoresRioja\Domain\Model\Participant;
use CorredoresRioja\Domain\Model\Organization;
use DateTime;

class InMemoryParticipantRepository implements ParticipantRepsitory {
    
    private $participants = array();
    
    function __construct() {
        $organization = new Organization(1, '360 Rioja Runners', '360 Rioja Runners', '360@runners.es', '','');
        
        $race1 =  new Race(1, 'Behobia San Sebastián', '51 Edición de la mítica behobia', new \DateTime('11/08/2015 11:30'), 20.5, date_create('11/06/2015'), 30000, 'behobia-san-sebastian.jpg', $organization, 'San Sebastián');
        $race2 = new Race(2, 'Santurce Bilbao', 'Desde Santurce hasta bilbao', date_create('11/29/2015 10:00'), 16, date_create('11/27/2015'), 5000, 'santurce-bilbao.jpg', $organization, 'Bilbao');
        
        $runner = new Runner('1234', 'Carlos', 'Tirado', 'carlos@tirado.com', '1234', '', 'calahorra', new DateTime('01/28/1987'));
        
        $this->participants[$race1->getId()] = new Participant($race1, $runner, 27500, 1500);
        $this->participants[$race2->getId()] = new Participant($race2, $runner, 1, 0);
    }
    
    public function getAllRacesForRunner($runnerId) 
    {
        
    }

    public function getAllRacesForRunnerDisputed($runnerId) {
        
    }

    public function getAllRacesForRunnerNonDisputed($runnerId) {
        
    }

    public function getParcipantsInRace($raceId) 
    {
        if (array_key_exists($raceId,$this->participants ))
        {
            return $this->participants[$raceId];
        }
        
        return null;
    }

    public function isRunnerAlreadyRegistered($runnerId, $raceId) 
    {
        if ($raceId == 2) {
            return true;
        }

        return false;
    }

    public function registerRunnerInRace($runnerId, $raceId) 
    {
        //do nothing
    }

    public function removeParticipation($participationId) {
        //do nothing
    }

    public function updateTimeForUserInRace($raceId, $runnerId, $time) {
        
    }

//put your code here
}
