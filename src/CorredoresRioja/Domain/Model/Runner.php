<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Runner
 *
 * @author Carlost
 */
class Runner {
    private $dni;
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $salt;
    private $address;
    private $birthDate;

    function getDni() {
        return $this->dni;
    }

    function getName() {
        return $this->name;
    }

    function getLastname() {
        return $this->lastname;
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

    function getAddress() {
        return $this->address;
    }

    function getBirthDate() {
        return $this->birthDate;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
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

    function setAddress($address) {
        $this->address = $address;
    }

    function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }
}
