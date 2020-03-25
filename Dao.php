<?php
require_once 'KLogger.php';

class Dao{

  private $host = 'us-cdbr-iron-east-01.cleardb.net';
  private $dbname = 'heroku_0c88d287915d639';
  private $username = 'be73a0ca82a2ce';
  private $password = '19eec871';
  private $logger;

  public function __construct(){
    $this->logger = new KLogger("log.txt", KLogger::WARN);
  }

  public function getConnection(){
    try{
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }catch(Exception $e){
      $this->logger->LogError("Couldn't connect to database: " . $e->getMessage());
      return null;
    }
    return $connection;
  }

  public function getCustomers(){
    $conn = $this->getConnection();
    if(is_null($conn)){
      return;
    }
    try{
      return $conn->query("select * from customers", PDO::FETCH_ASSOC);
    }catch(Exception $e){
      $this->logger->:LogError("Couldn't retrieve customer data: " . $e->getMessage());
      exit;
    }
  }

  private function getCustomerID($firstname,$lastname,$email){
    $this->logger->LogDebug("Getting customer id: [$firstname] [$lastname] [$email]");
    $conn = $this->getConnection();
    if(is_null($conn)){
      return;
    }
    try{
      return $conn->query("select customer_id from customer where firstName=':firstname' && lastName=':lastname' && email=':email'", PDO::FETCH_ASSOC);
    }catch(Exception $e){
       echo print_r($e,1);
       exit;
    } 
  }

 
  public function insertComment($firstname,$lastname,$email,$comment){
    $this->logger->LogDebug("Inserting a comment from customer [$comment]");
    $conn = $this->getConnection();
    $customer = $this->getCustomerID();
    $insert = "insert into comments (customer_id, comment) values(:customer, :comment)";
    $q = $conn->prepare($insert);
    $q->bindParam(":firstname", $firstname);
    $q->bindParam(":lastname", $lastname);
    $q->bindParam(":email", $email);
    $q->bindParam(":comment", $comment);
    $q->execute();    
  }
} 
  
