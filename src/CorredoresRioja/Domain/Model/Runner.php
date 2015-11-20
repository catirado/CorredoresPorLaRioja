<?php

namespace CorredoresRioja\Domain\Model;

class Runner {
    private $dni;
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $salt;
    private $address;
    private $birthDate;
    
    public function __construct($dni, $name, $lastname, $email, $password, $salt, $address, $birthDate) {
        $this->dni = $dni;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->salt = $salt;
        $this->address = $address;
        $this->birthDate = $birthDate;
    }
            
    public function getDni() {
        return $this->dni;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getBirthDate() {
        return $this->birthDate;
    }
    
    /**
     * Assert\True(message="asserts.ispasswordlegal")
     */
    public function isPasswordLegal()
    {
        return $this->nombre != $this-password;
    }
    
    /**
     * Assert\True(message="asserts.isadult")
     */
    public function isAdult()
    {
        $currentYear = getdate()['year'];
        $birthdayYear = ($this->birthDate->format('Y'));
        $diff_years = ($currentYear - $birthdayYear);
        return $diff_years >= 18;
    }
}
