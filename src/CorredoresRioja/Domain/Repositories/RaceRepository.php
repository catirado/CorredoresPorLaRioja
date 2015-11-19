<?php

namespace CorredoresRioja\Domain\Repositories;
use CorredoresRioja\Domain\Model\Race;

interface RaceRepository 
{
    public function createNewRace(Race $race);
    public function updateRaceInfo(Race $race);
    public function removeRace($raceId);
    public function getRaceBySlug($race);
    public function getDisputedRacesByOrganization($organizationId);
    public function getNonDisputedRacesByOrganization($organizationId);
    public function getDisputedRaces();
    public function getNonDisputedRaces();
    public function getAllRaces();
}
