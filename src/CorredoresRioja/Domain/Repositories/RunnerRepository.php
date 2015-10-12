<?php

namespace CorredoresRioja\Domain\Repositories;

interface RunnerRepository {
    public function createNewRunner($runner);
    public function updateRunnerInfo($runner);
    public function removeRunner($runnerId);
    public function getRunnerByDNI($runner);
    public function getAllRunners();
}
