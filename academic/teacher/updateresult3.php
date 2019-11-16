<?php



  include('../dbcon.php');

  $id=$_POST['sid'];
  echo $id;
  $roll_no=$_POST['roll_no'];

  $course=$_POST['course_id'];
  $grade=$_POST['course_grade'];
  $status=$_POST['status'];
  $test=$_POST['test_type'];
  $id=$_POST['sid'];
  $qury="UPDATE `result` SET `rollno`='$roll_no',`course_id`='$course',`course_grade`='$grade',`status`='$status',`test_type`='$test' WHERE `result`.`rollno`='$id'";

  $run=mysqli_query($con,$qury);

  if($run==true)
  {
  ?>
  <script>
    alert('data successfully updated');
    window.open('updateresult.php','_self');

  </script>

  <?php
  }
  else {
    echo"not submited";
    window.open('updateresult.php','_self');

  }







 ?>
