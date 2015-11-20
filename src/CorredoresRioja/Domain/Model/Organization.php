<?php

namespace CorredoresRioja\Domain\Model;
use CorredoresRioja\Infrastructure\Util;

class Organization {
    
    private $id;
    private $name;
    private $description;
    private $email;
    private $password;
    private $salt;
    
    //constructor para crearla
    public function __construct($id, $name, $description, $email, $password, $salt) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->email = $email;
        $this->password = $password;
        $this->slug = Util::getSlug($name);
    }
    
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
        $this->slug = Util::getSlug($name);
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
}