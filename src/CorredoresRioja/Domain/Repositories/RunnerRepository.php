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
interface RunnerRepository {
    public function createNewRunner($runner);
    public function updateRunnerInfo($runner);
    public function removeRunner($runnerId);
    public function getRunnerByDNI($runner);
    public function getAllRunners();
}
