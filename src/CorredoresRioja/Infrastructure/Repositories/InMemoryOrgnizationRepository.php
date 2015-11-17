<?php

namespace CorredoresRioja\Infrastructure\Repositories;

class InMemoryOrgnizationRepository implements OrganizationRepository {
    
    //hago una coleccion de lista de organizaciones
    private $organizations;
    
    public function createNewOrganization($organization) {
        $this->organizations.add($organization);
    }

    public function getAllOrganizations() {
        return $this->$organizations;
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
