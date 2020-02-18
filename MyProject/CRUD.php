<?php
include_once('DBconfig.php');
class CRUD extends DBconfig{
   public function __construct(){
        parent:: __construct();
   }
    public function getData($query){
        $result=$this->con->query($query);
        if($result==false){
            return false;
        }
       
        $rows=array();
        while($row=$result->fetch_assoc()){
            $rows[]=$row;
        }
        return $rows;  
    }
    public function execute($query){
        $result = $this->con->query($query);
        if($result==false){
            return false;
        }
        return true;
    }
}

?>