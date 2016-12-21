<?php

class PDOfile{
  private $servername;
  private $username;
  private $password;
  private $dbname;
  private $dbConn;

  public function __contruct(){
    $this->servername="sql2.njit.edu";
    $this->username="ml473";
    $this->password="Cl1n1qu1";
    $this->$dbname="ml473";
    $this->dbConnect();
  
  }
  public function dbConnect(){
    $this->dbConn = new PDO("mysql:host=$this->servername;
    dbname=$this->dbname, $username, $password");
    $this->dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

}

?>
