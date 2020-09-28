<?php

class CategoryManager
{
  public function findAll() {
       $req = $this->db->prepare('SELECT * FROM User');
      $req->execute();
      return $req->fetchAll();
  }
?>
