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
interface ParticipantRepsitory {
    public function registerRunnerInRace($runnerId, $raceId);
    public function getAllRacesForRunner($runnerId);
    public function getParcipantsInRace($raceId);
    public function getAllRacesForRunnerDisputed($runnerId);
    public function getAllRacesForRunnerNonDisputed($runnerId);
    public function isRunnerAlreadyRegistered($runnerId, $raceId);
    public function updateTimeForUserInRace($raceId, $runnerId, $time);
    public function removeParticipation($participationId);
}
