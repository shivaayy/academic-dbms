<?php

include('header2.php');
include('header1.php');
include('../dbcon.php');

$sid=$_POST['sid'];

$bid=$_POST['book_id'];
$rollno=$_POST['rollno'];
$bname=$_POST['bname'];
$idate=$_POST['i_date'];
$rdate=$_POST['r_date'];

$qury="UPDATE `lib` SET `rollno`='$rollno',`book_id`='$bid',`book_name`='$bname',`issued_date`='$idate',`lib`.`return_date`='$rdate' WHERE rollno='$sid' ";


$run=mysqli_query($con,$qury);

if($run==true)
{

?>
<script>
 alert('data successfully update');
 window.open('updatelib.php','_self');
</script>

<?php
}
else {

  ?>
  <script>
   alert('data not update');
   window.open('updatelib.php ? sid=<?php echo $id ?>','_self');
  </script>
  <?php
}
?>
