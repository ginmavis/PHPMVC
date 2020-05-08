<?php 

class DB{
    public $con;
    // case 1 : configuration direct  (cấu hình trực tiếp)
    protected $ServerName="localhost";
    protected $username= "root";
    protected $password = "root"; 
    protected $dbname = "mvc";
    function __construct()
    {
        $this->con=mysqli_connect($this->ServerName,$this->username,$this->password,$this->dbname);
        mysqli_select_db($this->con,$this->dbname);
        // set tieng viet
        mysqli_set_charset($this->con,'utf8');
       // mysqli_query($this->con,"SET NAMES 'utf8' ");
    }
}

?>