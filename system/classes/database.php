<?php 

class database{

    public $host = HOST;
    public $user = USER;
    public $password = PASSWORD;
    public $database = DATABASE;
    public $con;
    public $result;

    public function __construct()
    {
        try{
            $this->con = new PDO('mysql.host='.$this->host.";dbname=".$this->database, $this->user, $this->password);

        } 
        catch(PDOException $e) {
            echo "Database Connection Error ".$e->getMessage();
        }
    }

    public function Query($qry, $param=[]){
        if(empty($param)){
            $this->result = $this->con->prepare($qry);
            return $this->result->execute();
        }
        else{
            $this->result = $this->con->prepare($qry);
            return $this->result->execute();
        }

    }

}