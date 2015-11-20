<?php

namespace CorredoresRioja\Infrastructure\Security;
use Symfony\Component\Security\Core\User\UserProviderInterface; 
use Symfony\Component\Security\Core\User\UserInterface; 
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException; 
use Symfony\Component\Security\Core\Exception\UnsupportedUserException; 
use CorredoresRioja\Domain\Repositories\RunnerRepository;
use CorredoresRioja\Infrastructure\Security\RunnerUser;

class RunnerUserProvider implements UserProviderInterface{
    
    private $runnerRepository;
    
    public function __construct(RunnerRepository $repository) {
        $this->runnerRepository = $repository;
    }
    
    public function loadUserByUsername($username) {
        $userData = $this->runnerRepository->getRunnerByDNI($username);
        if ($userData){ 
            $password = $userData->getPassword(); 
            $salt = $userData->getSalt();
            return new RunnerUser($username, $password, $salt); 
        } 
        
        throw new UsernameNotFoundException(
                sprinf('No existe un usuario con DNI "%s".', $username)
        );
    }
    
    public function refreshUser(UserInterface $user) {
        if (!$user instanceof RunnerUser){
            throw new UnsupportedUserException(
                sprintf('Instances of "%s are not supported', get_class($user))
            );
        }
        
        return $this->loadUserByUsername($user->getUsername());
    }
    
    public function supportsClass($class) {
        return $class == 'CorredoresRioja\Infrastructure\Security\RunnerUser';
    }
}
