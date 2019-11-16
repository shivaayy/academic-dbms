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


 <form action="updateresult.php"method="post" >
   <th>
     rollno
     <td>
       <input class="up" type="text" name="rollno" placeholder="enter rollno" />
     </td>
   </th>
   <th>
     course
     <td>
       <input class="up" type="text" name="course" placeholder="enter course_id" />
     </td>
   </th>
   <td>
     <input class="bt"type="submit" name="submit" value="submited" >


   </td>

 </form>
 </tr>
 </table>
 <table align="center" width="80%" border="1">
 <tr style="background-color:blue;">
 <th >  rollno</th>
 <th>  course</th>
 <th>course_grade</th>
 <th>status</th>
 <th>test_type</th>

 <th>edit</th>

 </tr>
 <?php
 if(isset($_POST['submit']))
 {
 include('../dbcon.php');
$roll_no=$_POST['rollno'];
$course=$_POST['course'];
$qury="SELECT * FROM `result` WHERE rollno='$roll_no'";
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
  <td><?php echo $data["rollno"]?></td>
  <td><?php echo $data["course_id"]?></td>
  <td><?php echo $data["course_grade"]?></td>
  <td><?php echo $data["status"]?></td>
  <td><?php echo $data["test_type"]?></td>

  <td><a href="updateresult2.php ? rid=<?php echo $data['rollno']  ?>">EDIT</a></td>


</tr>



<?php

}



}


}




?>



 </table>

 </body>
 </html>
