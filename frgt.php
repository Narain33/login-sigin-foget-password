<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $email=mysqli_real_escape_string($db,$_POST['uname']);
  $pwd=mysqli_real_escape_string($db,$_POST['pass']);
  $cpwd=mysqli_real_escape_string($db,$_POST['cpass']);
  if($pwd===$cpwd)
  {
    $quer="SELECT * from info where uname='$email'";
    $quer1=mysqli_query($db,$quer);
    $nrow=mysqli_num_rows($quer1);
    if($nrow>0)
    {
         $q="UPDATE info set pass='$pwd' WHERE uname='$email'";
         $q1=mysqli_query($db,$q);
         if($q1)
         {
            echo "<script>alert('password changed succesfully');</script>";
         }
    }
    else{
        echo "<script>alert('user not found');</script>";

    }

  }else{
  echo "<script>alert('please enter the both the passwords same!!!');window.location.href='forgetpswd.php';</script>";}
}
?>