<?php

class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $image_url;
    private $id_categorie;

    public function setId($val) {
        if ( gettype($val) === integer ) {
            $this->id = $val;
            return true;
        }
        else return false;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($val) {
        if ( gettype($val) === string ) {
            $this->name = $val;
            return true;
        }
        else return false;
    }

    public function getName() {
        return $this->name;
    }

    public function setDescription() {
        if ( gettype($val) === string ) {
            $this->description = $val;
            return true;
        }
        else return false;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setPrice($val) {
        if ( gettype($val) === string ) {
            $this->price = $val;
        }
        else return false;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setImage_url($val) {
        if ( gettype($val) === string) {
            $this->image_url = $val;
            return true;
        }
        else return false;
    }

    public function getImage_url() {
        return $this->image_url;
    }

    public function setId_categorie($val) {
        if ( gettype($val) === string ) {
            $this->id_categorie = $val;
            return true;
        }
        else return false;
    }

    public function getId_categorie() {
        return $this->id_categorie;
    }
}

?>
