<?php
include('../admin/header.php');
include('head.php');
 ?>
 <table align="center">
   <tr>


 <form action="viewcourse.php"method="post" >
   <th>
     dept
     <td>
       <input class="up" type="text" name="dept" placeholder="enter department" />
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
    <th>department</th>
 <th >  course id</th>
 <th>  course name</th>
 <th>credit</th>
 <th>syllabus</th>


 </tr>
<?php
 if(isset($_POST['submit']))
 {
 include('../dbcon.php');
 $dept=$_POST['dept'];

 $qury="SELECT * FROM `depatment` WHERE `dname`='$dept' ";
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
   <td><?php echo $data["dname"]?></td>
   <td><?php echo $data["course_id"]?></td>
   <td><?php echo $data["course_name"]?></td>
   <td><?php echo $data["course_credit"]?></td>
   <td><a href="../img2/<?php echo $data['syllabus'] ?>" target="_blank"><?php echo $data['syllabus']?>['name']</td>



 </tr>



 <?php

 }



 }


 }




  ?>

 </table>


 </body>
 </html>
