<?php

namespace CorredoresRioja\Infrastructure\Repositories\InMemory;
use CorredoresRioja\Domain\Repositories\RaceRepository;
use CorredoresRioja\Domain\Model\Race;

class InMemoryRaceRepository implements RaceRepository{
    
    private $races = array();
    
    function __construct() {
        array_push($this->races, new Race(1, 'Behobia San Sebastián', '51 Edición de la mítica behobia', new \DateTime('11/08/2015 11:30'), 20.5, date_create('11/06/2015'), 30000, 'behobia-san-sebastian.jpg', 1, 'San Sebastián'));
        array_push($this->races, new Race(2, 'Santuce Bilbao', 'Desde Santurce hasta bilbao', date_create('11/29/2015 10:00'), 16, date_create('11/27/2015'), 5000, 'santurce-bilbao.jpg', 1, 'Bilbao'));
    }
    
    public function createNewRace(Race $race) {
        // do nothing
    }

    public function getAllRaces() {
        return $this->races;
    }

    public function getDisputedRaces() {
        return $this->races;
    }

    public function getNonDisputedRaces() {
        return $this->races;
    }
    
    public function getDisputedRacesByOrganization($organizationId) {
        return $this->races;
    }
    
    public function getNonDisputedRacesByOrganization($organizationId) {
        return $this->races;
    }

    public function getRaceBySlug($race) {
        return $this->races[0];
    }

    public function removeRace($raceId) {
        //do nothing
    }

    public function updateRaceInfo(Race $race) {
        return $race;
    }
}
