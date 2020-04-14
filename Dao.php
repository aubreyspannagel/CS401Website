<?php
require_once 'KLogger.php';

class Dao{
  private $logger;

  public function __construct(){
   $this->logger = new KLogger("log.txt", KLogger::DEBUG);
  }
  
  public function getConnection(){ 
    try{
     $connection = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_0c88d287915d639", "be73a0ca82a2ce", "19eec871");
    }catch(Exception $e){
      $this->logger->LogError("Couldn't connect to database: " . $e->getMessage());
      return null;
    }
    return $connection;
  }

  public function signup($fn, $ln, $email, $password){
    $conn = $this->getConnection();
    $saveUser = "insert into customer (firstName, lastName, email, pswd) values ('{$fn}','{$ln}','{$email}','{$password}')";
    $prepared = $conn->prepare($saveUser);
    $prepared->bindParam('{$fn}',$fn); 
    $prepared->bindParam('{$ln}',$ln); 
    $prepared->bindParam('{$email}',$email); 
    $prepared->bindParam('{$password}',$password); 
    $prepared->execute();
    $this->logger->LogInfo("Customer signed up.");
  }
  
  public function userExists($email){
   $conn = $this->getConnection();
   $query = $conn->prepare("select email from customer where email=\"{$email}\"");
   $query->execute();
   $data = $query->fetchAll();
   return $data;
  }
  
  public function saveComment($fn, $ln, $email, $comment){
    $conn = $this->getConnection();
    $query = "insert into comments (firstName, lastName, email, comments) values ('{$fn}','{$ln}', '{$email}', '{$comment}')";
    $prepared = $conn->prepare($query);
    $prepared->bindParam('{$fn}',$fn); 
    $prepared->bindParam('{$ln}',$ln); 
    $prepared->bindParam('{$email}',$email); 
    $prepared->bindParam('{$comment}',$comment); 
    $prepared->execute();
    $this->logger->LogInfo("Comment received.");
  }
  
  public function checkPassword($email, $password){
   $conn = $this->getConnection();
   $query = $conn->prepare("select email from customer where email=\"{$email}\" && pswd=\"{$password}\"");
   $query->execute();
   $data = $query->fetchAll();
   return $data;
  }

  public function getClothing(){
   $conn = $this->getConnection();
   $query = $conn->prepare("select * from clothing");
   $query->execute();
   $data = $query->fetchAll();
   return $data;
  }











} 
?> 
