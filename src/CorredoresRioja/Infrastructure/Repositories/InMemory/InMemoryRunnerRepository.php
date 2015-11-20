<?php

namespace CorredoresRioja\Infrastructure\Repositories\InMemory;
use CorredoresRioja\Domain\Repositories\RunnerRepository;
use CorredoresRioja\Domain\Model\Runner;
use DateTime;

class InMemoryRunnerRepository implements RunnerRepository {
    
    public function createNewRunner($runner) {
        
    }

    public function getAllRunners() {
        
    }

    public function getRunnerByDNI($runner) {
        return new Runner('1234', 'Carlos', 'Tirado', 'carlos@tirado.com', '1234', '', 'calahorra', new DateTime('01/28/1987'));
    }

    public function removeRunner($runnerId) {
        //do nothing
    }

    public function updateRunnerInfo($runner) {
        //do nothing
    }

}
