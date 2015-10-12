<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Carlost
 */
interface OrganizationRepository {
    public function createNewOrganization($organization);
    public function updateOrgnizationInfo($organization);
    public function removeOrganization($organizationId);
    public function getOrganizationBySlug($slug);
    public function getOrganizationByMail($mail);
    public function getAllOrganizations();
}
