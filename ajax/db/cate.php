<?php



class cate 
{
    public $dbh='';
    function __construct()
    {
        $conn=mysqli_connect("localhost","root","admin@123","test");
        $this->dbh=$conn;
        if(mysqli_connect_error())
        {
            echo " fail to connect to mysql :" . mysqli_connect_error();
        }

    }
    //show department in category
    public function showdeprt()
    {
        $showdp=mysqli_query($this->dbh,"SELECT * FROM Department");
        return $showdp;
    }
}




?>