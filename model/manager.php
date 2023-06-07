<?php class Manager {
    private $manager_id;
    private $full_name;
    private $email;
    private $comune_id;
    private $address;
    private $phone;
    private $username;
    private $password;
    private $is_admin;

    public function getManagerId() {
        return $this->manager_id;
    }

    public function setManagerId($manager_id) {
        $this->manager_id = $manager_id;
    }

    public function getFullName() {
        return $this->full_name;
    }

    public function setFullName($full_name) {
        $this->full_name = $full_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getComuneId() {
        return $this->comune_id;
    }

    public function setComuneId($comune_id) {
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

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getIsAdmin() {
        return $this->is_admin;
    }

    public function setIsAdmin($is_admin) {
        $this->is_admin = $is_admin;
    }
}

?>