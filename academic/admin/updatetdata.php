
<?php
if(isset($_POST['submit']))
{
  include('../dbcon.php');
$t_id=$_POST["t_id"];
$name=$_POST["name"];
$dob=$_POST["dob"];
$addr=$_POST["addr"];
$d_name=$_POST["d_name"];
$email=$_POST["email"];
$salary=$_POST["salary"];
$p_no=$_POST["p_no"];
$id=$_POST['tid'];
$qury="UPDATE `teacher` SET `id` = '$t_id', `name` = '$name', `dname` = '$d_name', `dob` = '$dob', `addr` = '$addr', `mob` = '$p_no', `email` = '$email', `salaray` = '$salary' WHERE teacher.`id` = '$id'";
$run=mysqli_query($con,$qury);
if($run==true)
{
  ?>
  <script>
    alert('data updated  successfully');
    window.open('updateteacher.php','_self')
  </script>
  <?php
}
else {

  ?>
  <script>
    alert('data not  updated  ');
  </script>
  <?php
}

}

?>
