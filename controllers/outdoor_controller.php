<?php
include_once '../services/outdoor_service.php';
class OutdoorController {
    private $outdoor_service;

    public function __construct(OutdoorService $outdoor_service) {
        $this->outdoor_service = $outdoor_service;
    }

    public function createOutdoor(Outdoor $outdoor) {
        $new_outdoor_id = $this->outdoor_service->createOutdoor($outdoor);

        if ($new_outdoor_id) {
            return $new_outdoor_id;
        } else {
            echo "Erro ao inserir outdoor.";
        }
    }

    public function getOutdoors() {
        $outdoors = $this->outdoor_service->getOutdoors();

        if ($outdoors) {
            return $outdoors;
        } else {
            echo "Erro ao pegar os outdoors.";
        }
    }
}