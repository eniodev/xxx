<?php
class Commune
{
    private $communeName;
    private $municipalityId;

    public function __construct($communeName, $municipalityId)
    {
        $this->communeName = $communeName;
        $this->municipalityId = $municipalityId;
    }

    // Métodos getters e setters

    public function getCommuneName()
    {
        return $this->communeName;
    }

    public function setCommuneName($communeName)
    {
        $this->communeName = $communeName;
    }

    public function getMunicipalityId()
    {
        return $this->municipalityId;
    }

    public function setMunicipalityId($municipalityId)
    {
        $this->municipalityId = $municipalityId;
    }
}