<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Participante
 *
 * @author Carlost
 */
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
