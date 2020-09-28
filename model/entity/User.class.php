<?php

class User {
    private $id;
    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $address;
    private $postalCode;
    private $city;

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

    public function setEmail($val) {
        // if ( gettype($val) === string ) {
        // if ( is_string($val) ) {
            $this->email = $val;
            // return true;
        // }
        // else return false;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPassword($val) {
        // if ( gettype($val) === string ) {
            $this->password = $val;
            // return true;
        // }
        // else return false;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setFirstName($val) {
        if ( gettype($val) === string ) {
            $this->firstName = $val;
        }
        else return false;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setLastName($val) {
        if ( gettype($val) === string) {
            $this->lastName = $val;
            return true;
        }
        else return false;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setAddress($val) {
        if ( gettype($val) === string ) {
            $this->address = $val;
            return true;
        }
        else return false;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setPostalCode($val) {
        if ( gettype($val) === integer && strlen($val) === 5) {
            $this->postalCode = $val;
            return true;
        }
        else return false;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function setCity($val) {
        if ( gettype($val) === string ) {
            $this->city = $val;
            return true;
        }
        else return false;
    }

    public function getCity() {
        return $this->city;
    }

    public function hydrate(array $donnees) {
        foreach($donnees as $key => $value) {
            $this->$key = $value;
        }
    }
}

?>
