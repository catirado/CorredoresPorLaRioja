<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InMemoryOrgnizationRepository
 *
 * @author Carlost
 */
class InMemoryOrgnizationRepository implements OrganizationRepository {
    
    //hago una coleccion de lista de organizaciones
    
    public function createNewOrganization($organization) {
        
    }

    public function getAllOrganizations() {
        
    }

    public function getOrganizationByMail($mail) {
        
    }

    public function getOrganizationBySlug($slug) {
        
    }

    public function removeOrganization($organizationId) {
        return null;
    }

    public function updateOrgnizationInfo($organization) {
        return $organization;
    }
    
}
