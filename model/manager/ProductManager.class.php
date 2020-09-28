<?php

class ProductManager
{
  public function findOne($id) {
       $req = $this->db->prepare('SELECT * FROM User');
      $req->execute();
      return $req->fetchAll();
  }
  public function findByCategory($id) {
       $req = $this->db->prepare('SELECT * FROM User');
      $req->execute();
      return $req->fetchAll();
  }
}

?>
