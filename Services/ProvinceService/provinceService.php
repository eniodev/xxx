<?php 

//require_once '../IManagerService/IManagerService.php';
class ProvinceService {
private $provinceRepository;

public function __construct(ProvinceRepository $provinceRepository) {
$this->provinceRepository = $provinceRepository;
}

public function createProvince(Province $province) {
// Realizar validações ou lógica de negócio, se necessário

return $this->provinceRepository->createProvince($province);
}

public function getAllProvinces() {
    return $this->provinceRepository->getAllProvinces();
}
}