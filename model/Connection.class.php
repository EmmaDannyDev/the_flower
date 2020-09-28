<?php
class Connection {
    private $host = "localhost";
    private $dbname= "the_flower";
    private $username = "root";
    private $password = "";
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=' . $this->host . ';dbname='  . $this->dbname . ';charset=utf8', $this->username, $this->password);
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDb() {
        return $this->db;
    }
}
