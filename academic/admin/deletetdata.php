<?php

include('../dbcon.php');
$id=$_GET['sid'];
$qury="DELETE FROM `teacher` WHERE id='$id'";
$run=mysqli_query($con,$qury);
if(mysqli_num_rows($run)<1)
{
  ?>
  <script>
    alert('data not deleted');

  </script>
  <?php

header('location:deleteteacher.php');
}
else {

  ?>
  <script>
    alert('data  deleted');

  </script>
  <?php
  header('location:deleteteacher.php');
}


 ?>
