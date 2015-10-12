<?php

namespace CorredoresRioja\Domain\Model;

class Participant {
    
    private $dorsal;
    private $time;
    
    function getDorsal() {
        return $this->dorsal;
    }

    function getTime() {
        return $this->time;
    }

    function setDorsal($dorsal) {
        $this->dorsal = $dorsal;
    }

    function setTime($time) {
        $this->time = $time;
    }


}
