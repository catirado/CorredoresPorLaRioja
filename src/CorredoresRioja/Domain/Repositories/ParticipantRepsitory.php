<?php

namespace CorredoresRioja\Domain\Repositories;

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
