<?php
session_start();

if(isset($_SESSION['uid']))
{

}
else {
  header('location:../home.php');
}


 ?>





<?php
include('../admin/header.php');
include('head.php');
$id=$_SESSION['uid'];
echo $id;

 ?>
 <table align="center">
   <tr>


 <form action="viewresult.php"method="post" >
   <th>
     course id
     <td>
       <input class="up" type="text" name="coursecode" placeholder="enter course id" />
     </td>
   </th>

   <td>
     <input  class="bt" type="submit" name="submit" value="submited" >


   </td>

 </form>
 </tr>
 </table>

 <table align="center" width="80%" border="1">
 <tr style="background-color:blue;">

 <th >  course id</th>
 <th>  course grade</th>
 <th>status</th>
 <th>test_type</th>


 </tr>
 <?php
 if(isset($_POST['submit']))
 {
 include('../dbcon.php');
 $course=$_POST['coursecode'];

 $qury="SELECT * FROM `result` WHERE `course_id`='$course' and `rollno`='$id' ";
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
   <td><?php echo $data["course_id"]?></td>
   <td><?php echo $data["course_grade"]?></td>
   <td><?php echo $data["status"]?></td>
   <td><?php echo $data["test_type"]?></td>



 </tr>



 <?php

 }



 }


 }




  ?>

 </table>


 </body>
 </html>
