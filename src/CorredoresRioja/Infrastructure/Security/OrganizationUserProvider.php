<?php

namespace CorredoresRioja\Infrastructure\Security;
use Symfony\Component\Security\Core\User\UserProviderInterface; 
use Symfony\Component\Security\Core\User\UserInterface; 
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException; 
use Symfony\Component\Security\Core\Exception\UnsupportedUserException; 
use CorredoresRioja\Domain\Repositories\OrganizationRepository;
use CorredoresRioja\Infrastructure\Security\OrganizationUser;

class OrganizationUserProvider implements UserProviderInterface{
    
    private $organizationRepository;
    
    public function __construct(OrganizationRepository $repository) {
        $this->organizationRepository = $repository;
    }
    
    public function loadUserByUsername($username) {
        $userData = $this->organizationRepository->getOrganizationByMail($username);
        if ($userData){ 
            $password = $userData->getPassword(); 
            $salt = $userData->getSalt(); 
            return new​ OrganizationUser($username, $password,$salt); 
        } 
        
        throw new UsernameNotFoundException(
                sprinf('No existe una organización con email "%s".', $username)
        );
    }
    
    public function refreshUser(UserInterface $user) {
        if (!$user instanceof OrganizationUser){
            throw new UnsupportedUserException(
                sprintf('Instances of "%s are not supported', get_class($user))
            );
        }
        
        return $this->loadUserByUsername($user->getUsername());
    }
    
    public function supportsClass($class) {
        return $class == 'CorredoresRioja\Infrastructure\Security\OrganizationUser';
    }
}
