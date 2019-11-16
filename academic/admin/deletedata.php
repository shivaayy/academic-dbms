<?php

include('../dbcon.php');
$id=$_GET['sid'];
$qury="DELETE FROM `student` WHERE id='$id'";
$run=mysqli_query($con,$qury);
if(mysqli_num_rows($run)<1)
{
  ?>
  <script>
    alert('data not deleted');
  </script>
  <?php
header('location:deletestudent.php');
}
else {
  ?>
  <script>
    alert('data not deleted');
  </script>
  <?php

    header('location:deletestudent.php');
}


 ?>
