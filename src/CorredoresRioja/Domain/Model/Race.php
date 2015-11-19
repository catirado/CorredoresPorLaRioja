<?php

namespace CorredoresRioja\Domain\Model;
use CorredoresRioja\Infrastructure\Util;

class Race {
    
    private $id;
    private $name;
    private $description;
    private $date;
    private $distance;
    private $inscriptionLimitDate;
    private $maxParticipants;
    private $image;
    private $organizationId;
    private $slug;
    private $city;
    
    public function __construct($id,
                                $name,
                                $description,
                                $date,
                                $distance,
                                $inscriptionLimitDate,
                                $maxParticipants,
                                $image,
                                $organizationId,
                                $city) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->date = $date;
        $this->distance = $distance;
        $this->inscriptionLimitDate = $inscriptionLimitDate;
        $this->maxParticipants = $maxParticipants;
        $this->image = $image;
        $this->organizationId = $organizationId;
        $this->city = $city;
        $this->slug = Util::getSlug($name);
    }
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDate() {
        return $this->date;
    }

    public function getDistance() {
        return $this->distance;
    }

    public function getInscriptionLimitDate() {
        return $this->inscriptionLimitDate;
    }

    public function getMaxParticipants() {
        return $this->maxParticipants;
    }

    public function getImage() {
        return $this->image;
    }
    
    public function getOrganizationId() {
        return $this->organizationId;
    }
    
    public function getCity()
    {
        return $this->city;
    }
    
    public function getSlug()
    {
        return $this->slug;
    }
    
}
