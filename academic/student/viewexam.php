<?php
include('../admin/header.php');
include('head.php');
 ?>

  <table align="center">
    <tr>


  <form action="viewexam.php"method="post" >
    <th>
      batch
      <td>
        <input class="up" type="text" name="batch" placeholder="enter your batch" />
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
<th>batch</th>
     <th>dept</th>
  <th >  course id</th>
  <th>  exam date</th>
  <th>duration</th>
  <th>test type</th>




  </tr>


  <?php
   if(isset($_POST['submit']))
   {
   include('../dbcon.php');
   $batch=$_POST['batch'];

   $qury="SELECT * FROM `exam` WHERE `batch`='$batch' ";
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
     <td><?php echo $data["batch"]?></td>
     <td><?php echo $data["department"]?></td>
     <td><?php echo $data["course_id"]?></td>
     <td><?php echo $data["exam_date"]?></td>
     <td><?php echo $data["duration"]?></td>
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
