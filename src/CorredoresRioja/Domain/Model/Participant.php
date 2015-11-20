<?php

namespace CorredoresRioja\Domain\Model;

class Participant {
    
    private $dorsal;
    private $time;
    private $runner;
    private $race;
    
    public function __construct($race, $runner, $dorsal, $time) {
        $this->race = $race;
        $this->runner = $runner;
        $this->dorsal = $dorsal;
        $this->time = $time;
    }
    
    function getRunner() {
        return $this->runner;
    }

    function getRace() {
        return $this->race;
    }

    function getDorsal() {
        return $this->dorsal;
    }

    function getTime() {
        return $this->time;
    }
}
