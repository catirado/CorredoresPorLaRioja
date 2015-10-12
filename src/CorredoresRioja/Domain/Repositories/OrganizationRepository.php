<?php

namespace CorredoresRioja\Domain\Repositories;

interface OrganizationRepository {
    public function createNewOrganization($organization);
    public function updateOrgnizationInfo($organization);
    public function removeOrganization($organizationId);
    public function getOrganizationBySlug($slug);
    public function getOrganizationByMail($mail);
    public function getAllOrganizations();
}
