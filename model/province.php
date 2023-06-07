<?php
class Province
{
private $provinceId;
private $provinceName;

public function __construct($provinceId, $provinceName)
{
$this->provinceId = $provinceId;
$this->provinceName = $provinceName;
}

// Métodos getters e setters

public function getProvinceId()
{
return $this->provinceId;
}

public function setProvinceId($provinceId)
{
$this->provinceId = $provinceId;
}

public function getProvinceName()
{
return $this->provinceName;
}

public function setProvinceName($provinceName)
{
$this->provinceName = $provinceName;
}
}