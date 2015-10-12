<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carrera
 *
 * @author Carlost
 */
class Race {
    //put your code here
    private $id;
    private $name;
    private $description;
    private $date;
    private $distance;
    private $inscriptionLimitDate;
    private $maxParticipants;
    private $image;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getDate() {
        return $this->date;
    }

    function getDistance() {
        return $this->distance;
    }

    function getInscriptionLimitDate() {
        return $this->inscriptionLimitDate;
    }

    function getMaxParticipants() {
        return $this->maxParticipants;
    }

    function getImage() {
        return $this->image;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setDistance($distance) {
        $this->distance = $distance;
    }

    function setInscriptionLimitDate($inscriptionLimitDate) {
        $this->inscriptionLimitDate = $inscriptionLimitDate;
    }

    function setMaxParticipants($maxParticipants) {
        $this->maxParticipants = $maxParticipants;
    }

    function setImage($image) {
        $this->image = $image;
    }

        static public function getSlug($cadena, $separador = '-') ​ 
    { 
        // Código copiado de http://cubiq.org/the-perfect-php-clean-url-generator 
        $slug = iconv( ​ 'UTF-8' ​ , ​   ​ 'ASCII//TRANSLIT' ​ , ​  $cadena ​ ); 
        $slug = preg_replace ​ ( ​ "/[^a-zA-Z0-9\/_|+ -]/" ​ , ​   ​ '' ​ , ​  $slug ​ ); 
        $slug​ = strtolower ​ ( ​ trim ​ ( ​ $slug ​ , ​  $separador ​ )); 
        $slug​ = preg_replace ​ ( ​ "/[\/_|+ -]+/" ​ , ​  $separador ​ , ​  $slug ​ ); 
        return $slug; 
    }
}
