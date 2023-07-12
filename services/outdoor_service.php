<?php 
//include_once "../interfaces/imanagerservice.php";
include_once "../repositories/outdoor_repository.php";

class OutdoorService /*implements IUserService*/ {
private $outdoor_repository;

public function __construct(OutdoorRepository $outdoor_repository) {
$this->outdoor_repository = $outdoor_repository;
}

public function createOutdoor(Outdoor $outdoor) {
// Realizar validações ou lógica de negócio, se necessário

return $this->outdoor_repository->createOutdoor($outdoor);
}

public function getOutdoors() {
    return $this->outdoor_repository->getOutdoors();
}
}