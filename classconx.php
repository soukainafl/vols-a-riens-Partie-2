<?php 

class connex{


public $servername = "localhost";
public $dbname="gestionvol";
public$username = "root";
public $password = "";
public function connection()
{
try {
    $conn = new PDO("mysql:host=$servername;dbname=$this->dbname", $this->username, $this->password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  return $conn;
  
}
}
?> 