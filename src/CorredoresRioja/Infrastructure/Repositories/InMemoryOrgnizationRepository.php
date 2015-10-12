<?php

namespace CorredoresRioja\Infrastructure\Repositories;

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
