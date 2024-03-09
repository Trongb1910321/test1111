<?php
class Database
{
  private $host = "db";
  private $username = "root";
  private $password = "root";
  private $dbname = "pet";
  //code ket noi csdl bang pdo



  protected function connect()
  {
    try {
      $conn = 'mysql:host' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8';
      $pdo = new PDO($conn, $this->username, $this->password);
      return $pdo;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

  }
}
