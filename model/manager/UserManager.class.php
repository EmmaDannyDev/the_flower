<?php

class UserManager {
    private $db;

    function __construct($pdo) {
        $this->db = $pdo;
    }

    public function login(User $user)
    {
      $req = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
      $req->execute(
          array(
              'email'      => $user->getEmail(),
              'password'   => $user->getPassword()
          )
      );
      // var_dump($user);
      return $req->fetch();
    }
    public function create(User $user) {

        $req = $this->db->prepare(
        'INSERT INTO users ( email, password, firstName, lastName , adress, postalCode, city ) VALUES (:email, :password, :firstName, :lastName , :adress, :postalCode, :city )');

        $req->execute(
            array(
                'email'      => $user->getEmail(),
                'password'   => $user->getPassword(),
                'firstName'  => $user->getFirstName(),
                'lastName'   => $user->getLastName(),
                'adress'     => $user->getAddress(),
                'postalCode' => $user->getPostalCode(),
                'city'       => $user->getCity()
            )
        );
        print_r($req->errorInfo());
        // print_r($req);
    }
    public function findAll() {
         $req = $this->db->prepare('SELECT * FROM User');
        $req->execute();
        return $req->fetchAll();
    }
    public final function findOne($id) {
        $req = $this->db->prepare("SELECT * FROM USER WHERE id = $id");
        $req->execute();
        return $req->fetchAll();
    }
    public final function update(User $user) {
        $req = $this->db->prepare('UPDATE User SET email = :email, firstName = :firstName, lastName = :lastName, address = :address, postalCode = :postalCode, city = :city, password = :password WHERE id = :id');
        $req->execute(
            array(
                'lastName' => $user->getLastName(),
                'firstName' => $user->getFirstName(),
                'email' => $user->getEmail(),
                'address' => $user->getAddress(),
                'postalCode' => $user->getPostalCode(),
                'city' => $user->getCity(),
                'password' => $user->getPassword(),
                'id' => $user->getId()
            )
        );
    }
    public final function delete(User $user) {
        $req = $this->db->prepare("DELETE FROM USER WHERE id = $id");
        $req->execute();
    }
}

?>
