<?php

namespace CorredoresRioja\Infrastructure\Repositories\InMemory;
use CorredoresRioja\Domain\Repositories\RaceRepository;
use CorredoresRioja\Domain\Model\Race;
use CorredoresRioja\Domain\Model\Organization;

class InMemoryRaceRepository implements RaceRepository{
    
    private $races = array();
    private $oldRaces = array();
    private $allRaces = array();
    
    function __construct() {
        $organization = new Organization(1, '360 Rioja Runners', '360 Rioja Runners', '360@runners.es', '','');
        $race1 =  new Race(1, 'Behobia San Sebastián', '51 Edición de la mítica behobia', new \DateTime('11/08/2015 11:30'), 20.5, date_create('11/06/2015'), 30000, 'behobia-san-sebastian.jpg', $organization, 'San Sebastián');
        $race2 = new Race(2, 'Santurce Bilbao', 'Desde Santurce hasta bilbao', date_create('11/29/2015 10:00'), 16, date_create('11/27/2015'), 5000, 'santurce-bilbao.jpg', $organization, 'Bilbao');
        $race3 = new Race(3, 'San Silvestre Vallecana', 'La San Silvestre más multitudinaria de España', date_create('12/31/2015 18:00'), 10, date_create('12/29/2015'), 25000, 'san-silvestre-vallecana.jpg', $organization, 'Madrid');
        
        array_push($this->oldRaces,$race1);
        array_push($this->races,$race2);
        array_push($this->races,$race3);
        
        $this->allRaces[$race1->getSlug()]=$race1;
        $this->allRaces[$race2->getSlug()]=$race2;
        $this->allRaces[$race3->getSlug()]=$race3;
    }
    
    public function createNewRace(Race $race) {
        // do nothing
    }

    public function getAllRaces() {
        return $this->races;
    }

    public function getDisputedRaces() {
        return $this->oldRaces;
    }

    public function getNonDisputedRaces() {
        return $this->races;
    }
    
    public function getDisputedRacesByOrganization($organizationId) {
        return $this->oldRaces;
    }
    
    public function getNonDisputedRacesByOrganization($organizationId) {
        return $this->races;
    }

    public function getRaceBySlug($race) {
        return $this->allRaces[$race];
    }

    public function removeRace($raceId) {
        //do nothing
    }

    public function updateRaceInfo(Race $race) {
        return $race;
    }
}
