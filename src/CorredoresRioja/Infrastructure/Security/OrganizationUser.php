<?php

namespace CorredoresRioja\Infrastructure\Security;
use Symfony\Component\Security\Core\User\UserInterface; 
use Symfony\Component\Security\Core\User\EquatableInterface;

class OrganizationUser implements UserInterface, EquatableInterface{
   
    private $username;
    private $password;
    private $salt;
    private $roles;
    
    public function __construct($username, $password, $salt) {
        $this->username = $username;
        $this->password = $password;
        $this->salt = $salt;
        $this->roles = array('ROLE_ORGANIZATION');
    }
    
    public function eraseCredentials() {
        
    }
    
    function getUsername() {
        return $this->username;
    }
    
    function getPassword()
    {
        return $this->password;
    }
    
    function getSalt()
    {
        return $this->salt;
    }
    
    function getRoles()
    {
        return array('ROLE_ORGANIZATION');
    }
    
    public function isEqualTo(UserInterface $user) {
        if(!$user instanceof  RunnerUser ||
                $this->password !== $user->getPassword() ||
                $this->salt !== $user->getSalt() ||
                $this->username !== $user->getUsername())
        {
            return false;
        }
        return true;
    }
}
