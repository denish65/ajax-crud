<?php
session_start();
if(isset($_POST['log']))
{
  $role = $_POST['role'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

      if($_POST['role']=='admin')
      {
            $login = new db();
            $sql=$login->login($role,$email,$pass);
              if($sql)
                   { 
                     header("location:../admin/index.php"); 
                   }
              else{
                      echo "<div class='alert alert-danger mt-4'>
                            <h4 align='center'> invaliad input please try again </h4>
                            </div>";
                      header("refresh:2,../login/index.php");
                  }
       }
   if($_POST['role']=='user')
     {
              $ulogin=new db();
              $userlogin=$ulogin->userlogin($role,$email,$pass);
              if($userlogin)
              {
                header("location:../user/index.php");
              }
              else
               {            
                echo "<div class='alert alert-danger  '>
                     <h4 align='center'>invalid input plese try again </h4>
                     </div>";
                header("refresh:2,../login/index.php");
               }
      }
}
?>
