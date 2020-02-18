<?php
class DBconfig{
    private $_hostinfo= "localhost";
    private $_databaseUser= "root";
    private $_password= "";
    private $_dbname= "swe333";
    public $con;
    public function __construct(){
        if(empty($this->con)){
            $this->con=new mysqli($this->_hostinfo,$this->_databaseUser,$this->_password,$this->_dbname);
            if(!$this->con){
                echo "Not Connected!";
                exit;
            }
            
        }
           return $this->con;
    }


}
?>
