<?php

namespace CorredoresRioja\UI\RunnersBundle\Transformers;
use CorredoresRioja\Domain\Model\Runner;
use CorredoresRioja\UI\RunnersBundle\ViewModels\SignupRunnerViewModel;
use Symfony\Component\Form\DataTransformerInterface;

class SignupRunnerTransformer implements DataTransformerInterface {
    
    public function reverseTransform($value) {
        $runner = new Runner($value->getDni(), $value->getName(), 
                             $value->getLastname(), $value->getEmail(), 
                             $value->getPassword(), '',
                             $value->getAddress(), $value->getBirthdate());
        return $runner;
    }
    public function transform($value) {
        if ($value === null) {
            return null;
        }
        $signupRunnerViewModel = new SignupRunnerViewModel();
        $signupRunnerViewModel->setDni($value->getDNI());
        $signupRunnerViewModel->setName($value->getName());
        $signupRunnerViewModel->setLastname($value->getLastname());
        $signupRunnerViewModel->setEmail($value->getEmail());
        $signupRunnerViewModel->setPassword($value->getPassword());
        $signupRunnerViewModel->setAddress($value->getAddress());
        $signupRunnerViewModel->setBirthDate($value->getBirthDate());
        return $signupRunnerViewModel;
    }
}