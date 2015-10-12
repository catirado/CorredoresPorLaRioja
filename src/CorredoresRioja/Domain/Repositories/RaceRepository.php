<?php

namespace CorredoresRioja\Domain\Repositories;

interface RaceRepository 
{
    public function createNewRace($race);
    public function updateRaceInfo($race);
    public function removeRace($raceId);
    public function getRaceBySlug($race);
    public function getDisputedRacesByOrganization($organizationId);
    public function getNonDisputedRacesByOrganization($organizationId);
    public function getDisputedRaces();
    public function getNonDisputedRaces();
    public function getAllRaces();
}
