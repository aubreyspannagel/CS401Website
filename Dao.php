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
     $this->logger->LogInfo("DB connection is a success!");
    }catch(Exception $e){
      $this->logger->LogError("Couldn't connect to database: " . $e->getMessage());
      return null;
    }
    return $connection;
  }

  public function signup($fn, $ln, $email, $password){
    $conn = $this->getConnection();
    $checkUser = $this->findUserByEmail(":email");
    if(!is_null($checkUser)){
      $_SESSION['signuperror'] = ("Email already exists.");  
    }else{
      $saveUser = "insert into customer (firstName, lastName, address, state, zipcode, email) values (:fn,:ln,:email,:password)";
      $query = $conn->prepare($saveUser);
      $query->bindParam(":fn",$fn);
      $query->bindParam(":ln",$ln);
      $query->bindParam(":email",$email);
      $query->bindParam(":password",$password);
      $query->execute();
      $this->logger->LogInfo("Customer signed up.");
    }
  }
  
  public function findUserByEmail($email){
   $conn = $this->getConnection();

   try{
    return $conn->query("Select * From customer where \"email\"=:email",PDO::FETCH_ASSOC);
   }catch(Exception $e){
    return;
   }
   
  }
} 
?> 
