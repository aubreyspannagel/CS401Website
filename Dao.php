<?php
require_once 'KLogger.php';

class Dao{
  private $host = 'us-cdbr-iron-east-01.cleardb.net';
  private $dbname = 'heroku_0c88d287915d639';
  private $username = 'be73a0ca82a2ce';
  private $password = '19eec871';
  private $logger;

  public function __construct(){
   $this->logger = new KLogger("log.txt", KLogger::DEBUG);
  }
  
  public function getConnection(){
    try{
     $connection= new PDO("mysql:host=".$host.";dbname=".dbname, $username, $password);   
     $this->logger->LogInfo("DB connection is a success!");
    }catch(Exception $e){
      $this->logger->LogError("Couldn't connect to database: " . $e->getMessage());
      return null;
    }
    return $connection;
  }

  

} 
?> 
