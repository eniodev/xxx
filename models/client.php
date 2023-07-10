<?php 	
    
class Client {
    private $id;	
    private $name;
    private $type;	
    private $activity;	
    private $commune_id;	
    private $country_id;	
    private $address;	
    private $phone;	
    private $is_active;	
    private $user_id;

    public function __construct($name, $type, $activity, $commune_id, $country_id, $address, $phone, $user_id) {
        $this->name = $name;	
        $this->type = $type;	
        $this->activity = $activity;	
        $this->commune_id = $commune_id;	
        $this->country_id = $country_id;	
        $this->address = $address;	
        $this->phone = $phone;	
        $this->is_active = "N";	
        $this->user_id = $user_id;
    } 

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getType() {
    return $this->type;
  }

  public function setType($type) {
    $this->type = $type;
  }

  public function getActivity() {
    return $this->activity;
  }

  public function setActivity($activity) {
    $this->activity = $activity;
  }

  public function getCommuneId() {
    return $this->commune_id;
  }

  public function setCommuneId($commune_id) {
    $this->commune_id = $commune_id;
  }

  public function getCountryId() {
    return $this->country_id;
  }

  public function setCountryId($country_id) {
    $this->country_id = $country_id;
  }

  public function getAddress() {
    return $this->address;
  }

  public function setAddress($address) {
    $this->address = $address;
  }

  public function getPhone() {
    return $this->phone;
  }

  public function setPhone($phone) {
    $this->phone = $phone;
  }

  public function getIsActive() {
    return $this->is_active;
  }

  public function setIsActive($is_active) {
    $this->is_active = $is_active;
  }

  public function getUserId() {
    return $this->user_id;
  }

  public function setUserId($user_id) {
    $this->user_id = $user_id;
  }


    


}