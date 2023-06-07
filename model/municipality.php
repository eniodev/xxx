<?php
class Municipality { 
    private $municipalityId; 
    private $municipalityName; 
    private $provinceId; 
    public function __construct($municipalityName, $provinceId) 
    { 
    $this->municipalityName = $municipalityName;
    $this->provinceId = $provinceId;
    }

    // Métodos getters e setters

    public function getMunicipalityId()
    {
    return $this->municipalityId;
    }

    public function getMunicipalityName()
    {
    return $this->municipalityName;
    }

    public function setMunicipalityName($municipalityName)
    {
    $this->municipalityName = $municipalityName;
    }

    public function getProvinceId()
    {
    return $this->provinceId;
    }

    public function setProvinceId($provinceId)
    {
    $this->provinceId = $provinceId;
    }
    }