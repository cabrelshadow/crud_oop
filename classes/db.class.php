<?php

class Db{
    private  $host=    "localhost";
    private $password=  "";
    private  $user=    "root";
    private  $dbname= "oopblog";


    public function connect(){

      $connection='mysql:host='.$this->host.';dbname='.$this->dbname;
      $pdo= new PDO($connection,$this->user,$this->password);
       $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
       
       return $pdo;
      
    }




}