<?php

/*
 * Database class
 * connect to database
 * create prepared statements
 * Bind values
 * return rows and results
 */

Class Database{
    private $host=DB_HOST;
    private $user=DB_USER;
    private $pass=DB_PASS;
    private $dbname=DB_NAME;
    
    private $dbh;
    private $stmt;
    private $error;
    
    public function __construct(){
        $dsn = 'mysql:host=' .$this->host . ';dbname=' . $this->dbname;
        $options=array(
            PDO::ATTR_PERSISTENT =>true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        
        //CREATE PDO INSTANCE
        try{
            $this->dbh=new PDO($dsn,$this->user,$this->pass,$options);
            
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;

        }
    }
    
    //Prepare statement with query
    
    public function query($sql){
       $this->stmt = $this->dbh->prepare($sql); 
    }
    
    //Bind values
    public function bind($param, $value, $type=null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type=PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type=PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type=PDO::PARAM_NULL;
                    break;
                default:
                    $type=PDO::PARAM_STR;
                          
        }
        }
        
        $this->stmt->bindValue($param,$value,$type);
    }
    
    //Execute the prepared stamnet
    public function execute(){
        return $this->stmt->execute();
    }
    
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    //get single record as object
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    //get row count
     public function rowCount(){
        //$this->execute();
        return $this->stmt->rowCount();
    }
}

