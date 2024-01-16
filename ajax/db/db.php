<?php
class DB 
{
    public $dbh='';
    public $dt;
    function __construct()
    {
        $con = mysqli_connect("localhost", "root", "admin@123", "test");
        $this->dbh = $con;
        if(mysqli_connect_error())
        {
            echo "faild to connect to mysql :" . mysqli_connect_error();
        }
        date_default_timezone_set("Asia/Calcutta");
        // echo "\n";
        $this->dt=$date=date("d/m/Y");
    }
    public function insert($role,$fname,$lname,$streat,$city,$state,$country,$contact,$email,$gender,$dob,$jdate,$img,$dep,$uname,$pass)
    {
        $ret = mysqli_query($this->dbh,"insert into Registration(role,fristname,lastname,streat,city,state,country,contact_no,email,gender,date_of_brith,joining_date,images,department,user_name,password)
        values('$role','$fname','$lname','$streat','$city','$state','$country','$contact','$email','$gender','$dob','$jdate','$img','$dep','$uname','$pass')");
        return $ret;
    }
    public function fetchdata()
    {
        $result = mysqli_query($this->dbh,"select * from Registration");
        return $result;
    }
    public function delete($rid)
    {
        $deletedata = mysqli_query($this->dbh,"delete from Registration where rid=$rid");
        return $deletedata;
    }
    public function edit($uid)
    {
        $editdata = mysqli_query($this->dbh,"select * from Registration where rid=$uid");
        return $editdata;
    }
    public function login($role,$email,$pass)
    {
        $login = mysqli_query($this->dbh,"select * from Registration where role='$role' and email='$email' and password='$pass'");
        $result = mysqli_fetch_array($login);
        $no = mysqli_num_rows($login);
        if($no>0)
        {
            $_SESSION['aid'] = $result['rid'];
            $_SESSION['role']=$result['role'];
            $_SESSION['email'] = $result['email'];
            return true;
        }
        else
        {
            return false;
        }
    }
    public $rlv='';
    public function userlogin($role,$email,$pass)
    {
        $userlogin = mysqli_query($this->dbh,"select * from Registration where role='$role' and email='$email' and password='$pass'");
        $this->rlv=$role;
        $result = mysqli_fetch_array($userlogin);
        $no = mysqli_num_rows($userlogin);
        if($no>0)
        {
            $_SESSION['uid'] = $result['rid'];
            $_SESSION['urole']=$result['role'];
            $_SESSION['uemail']=$result['email'];
            return true;
        }
        else
        {
            return false ;
        }
    }
    public function showadmindata($aid)
    {
        $ashow=mysqli_query($this->dbh,"SELECT * from Registration where rid='$aid' ");
        return $ashow;
    }
    public function showuserdata($uid)
    {
        $show=mysqli_query($this->dbh,"SELECT * from Registration where rid='$uid' ");
        return $show;
    }
    public function update($fname,$lname,$streat,$city,$state,$country,$contact,$gender,$dob,$jdate,$img,$dep,$uname,$rid)
    {
        $update=mysqli_query($this->dbh,"update Registration set fristname='$fname',lastname='$lname',streat='$streat',city='$city',state='$state',country='$country',contact_no='$contact',gender='$gender',date_of_brith='$dob',joining_date='$jdate',images='$img',department='$dep',user_name='$uname' where rid='$rid' ");
        return $update;
    }


//     department 


    public function insertdata($dname,$dlocation,$uname)
    {

        $dpinsert=mysqli_query($this->dbh,"INSERT INTO Department(depart_name,depart_location,user_name,careated_date)VALUES ('$dname','$dlocation','$uname','$this->dt')");

                  return $dpinsert;
    }

    //show department data
    public function dpshow()
    {
        $dpshowdata=mysqli_query($this->dbh,"SELECT * FROM Department");
        return $dpshowdata;
    }


    //edit depatment data   
    public function dpedit($edname)
    {
        $dpeditdata=mysqli_query($this->dbh,"SELECT * FROM Department WHERE depart_name='$edname'");
        return $dpeditdata;
    }
    //update deparement data
    public function dpupdate($edname,$edlocation,$euname,$did)
    {

        //$update=mysqli_query($this->dbh,"update Registration set fristname='$fname',lastname='$lname',streat='$streat',city='$city',state='$state',country='$country',contact_no='$contact',gender='$gender',date_of_brith='$dob',joining_date='$jdate',images='$img',department='$dep',user_name='$uname' where rid='$rid' ");
        
        $dpupdatedata=mysqli_query($this->dbh,"UPDATE Department SET depart_name='$edname',depart_location='$edlocation',user_name='$euname' WHERE id='$did' ");
           return $dpupdatedata;

    }

    //delete department data
    public function dpdelete($did)
    {
        $dpdeletedata=mysqli_query($this->dbh,"DELETE FROM Department WHERE id='$did' ");
        return $dpdeletedata;
    }

    // select role
    public function dpselectrole()
    {
        $roleselect=mysqli_query($this->dbh,"select * from Department where role='admin' ");
        return $roleselect;
    }




    //category section


    //show data

    public function cateshow()
    {
        $cshow=mysqli_query($this->dbh,"SELECT * FROM category");
        return $cshow;
    }



    //insert data 
    public function cateinsert($cat,$dep)
    {
        $catinsert=mysqli_query($this->dbh,"INSERT INTO category (category,department) VALUES ('$cat','$dep')");
        return $catinsert;

    }
     //insert into image table
     public function imginsert($cate,$img)
     {
        $imginsert=mysqli_query($this->dbh,"INSERT INTO images (category,images)VALUES('$cate','$img') ");
     }

}
?>