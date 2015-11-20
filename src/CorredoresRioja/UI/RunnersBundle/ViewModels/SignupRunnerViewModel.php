<?php

namespace CorredoresRioja\UI\RunnersBundle\ViewModels;
use Symfony\Component\Validator\Constraints as Assert;

class SignupRunnerViewModel {
    
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

    function getBirthDate() {
        return $this->birthDate;
    }

    function getAddress() {
        return $this->address;
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

    function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    function setAddress($address) {
        $this->address = $address;
    }

        /**
     * @Assert\NotBlank()
     */
    private $dni;
    
    /**
     * @Assert\NotBlank()
     */
    private $name;
    
    /**
     * @Assert\NotBlank()
     */
    private $lastname;
    
    /**
     * @Assert\NotBlank ()
     * @Assert\Email ()
     */
    private $email;
    
    /**
     * @Assert\NotBlank ()
     */
    private $password;
    
    /**
     * @Assert\NotBlank ()
     * @Assert\Date ()
     */
    private $birthDate;
    
    /**
     * @Assert\NotBlank ()
     */
    private $address;
   
}
