<?php
include('../dbcon.php');
$name=$_POST["name"];
$roll_no=$_POST["roll_no"];
$dob=$_POST["dob"];
$addr=$_POST["addr"];
$ph_no=$_POST["ph_no"];
$e_mail=$_POST["e_mail"];
$batch=$_POST["batch"];
$id=$_POST['sid'];
$department=$_POST["department"];
$qurry="UPDATE `student` SET `name` = '$name',`dob`='$dob', `address` = ' $addr', `mobile_no` = '$ph_no', `e-mail` = '$e_mail', `batch` = '$batch',`id` = '$roll_no', `dept` = '$department' WHERE `student`.`id` = '$id';";

 $run=mysqli_query($con,$qurry);
if($run==true)
{
?>
<script>
  alert('data successfully update');
  window.open('updateform.php? sid=<?php echo $id ?>','_self');
</script>

<?php
}
else {
  echo"not submited";
}
?>
