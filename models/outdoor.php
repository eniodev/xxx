<?php
class Outdoor {
    private $id;
    private $type;
    private $status;
    private $price;
    private $commune_id;
    private $image_path;

    public function __construct($type, $status, $price, $commune_id, $image_path) {
        $this->type = $type;
        $this->status = $status;
        $this->price = $price;
        $this->commune_id = $commune_id;
        $this->image_path = $image_path;
    }

    // Getters and Setters for each property

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getCommuneId() {
        return $this->commune_id;
    }

    public function setCommuneId($commune_id) {
        $this->commune_id = $commune_id;
    }

    public function getImagePath() {
        return $this->image_path;
    }

    public function setImagePath($image_path) {
        $this->image_path = $image_path;
    }
}
?>
