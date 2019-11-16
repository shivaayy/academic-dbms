<?php
session_start();

if(isset($_SESSION['uid']))
{

}
else {
  header('location:../teacherlogin.php');
}


 ?>
 <?php

 include('header2.php');
 include('header1.php');

  ?>
  <table align="center">
    <tr>


  <form action="viewstudent.php"method="post" >
    <th>
      ROLLNO
      <td>
        <input class="up" type="text" name="rollno" placeholder="enter  rollno" />
      </td>
    </th>

    <td>
      <input  class="bt" type="submit" name="submit" value="submited" >


    </td>

  </form>
  </tr>
  </table>



<table align="center" width="80%" border="1" >
  <tr style="background-color:blue;">
    <th> NAME   </th>
    <th> COURSE   </th>
    <th> GRADE   </th>
    <th> STATUS   </th>
    <th> test_type   </th>
  </td>

  <?php
  if(isset($_POST['submit']))
  {
  include('../dbcon.php');
  $roll_no=$_POST['rollno'];

  $qury="SELECT student.name, result.course_id, result.course_grade,result.status,result.test_type
FROM student
INNER JOIN result ON student.id=result.rollno;";
  $run=mysqli_query($con,$qury);
  if(mysqli_num_rows($run)<1)
  {
   echo"no data found";
  }
  else {
   $i=0;
   while($i<mysqli_num_rows($run))
  {
   $data=mysqli_fetch_assoc($run);
  $i++; ?>
  <tr >
   <td><?php echo $data["name"]?></td>
   <td><?php echo $data["course_id"]?></td>
   <td><?php echo $data["course_grade"]?></td>
   <td><?php echo $data["status"]?></td>
   <td><?php echo $data["test_type"]?></td




  </tr>



  <?php

  }



  }


  }




  ?>



  </table>

  </body>
  </html>
