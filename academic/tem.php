<?php
include('dbcon.php');

if(isset($_POST['login']));
{

$username=$_POST['username'];
$password=$_POST['password'];


$qur="SELECT * FROM `admin`WHERE username='$username' and password='$password'";
$run=mysqli_query($con,$qur);
$row=mysqli_num_rows($run);

if($row<1)
{

  ?>
  <script>
alter('username or password is incorrect');
window.open('adminlogin.php','_self');


  </script>
<?php

}
else
{

  $data=mysqli_fetch_assoc($run);
  $id=$data['id'];
  session_start();
  $_session[$uid]=$id;
  header('location:admindashbord.php');
}

}
 ?>
