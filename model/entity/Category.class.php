<?php

class Category {
    private $id;
    private $name;
    private $image_url;

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

    public function setImage_url() {
        if ( gettype($val) === string ) {
            $this->image_url = $val;
            return true;
        }
        else return false;
    }

    public function getImage_url() {
        return $this->password;
    }
}

?>
