<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Carlost
 */
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
