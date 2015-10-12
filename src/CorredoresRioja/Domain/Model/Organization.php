<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Organizacion
 *
 * @author Carlost
 */
class Organization {
    
    private $id;
    private $name;
    private $description;
    private $email;
    private $password;
    private $salt;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getSalt() {
        return $this->salt;
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

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setSalt($salt) {
        $this->salt = $salt;
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
