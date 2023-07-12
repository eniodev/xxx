<?php class Manager {
    private $id;
    private $name;
    private $commune_id;
    private $address;
    private $phone;
    private $user_id;

    public function __construct($name, $address, $phone, $commune_id, $user_id) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->commune_id = $commune_id;
        $this->user_id = $user_id;
    }
    public function getId() {
        return $this->id;
    }

    public function setId($manager_id) {
        $this->manager_id = $manager_id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->full_name = $name;
    }

    public function getCommuneId() {
        return $this->commune_id;
    }

    public function setCommuneId($comune_id) {
        $this->comune_id = $comune_id;
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

    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }
}

?>