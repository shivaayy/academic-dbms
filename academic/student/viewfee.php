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
 <table align="center" width="80%" border="1">
 <tr style="background-color:blue;">

 <th >  trans id</th>
 <th>  sem</th>
 <th>total</th>

 </tr>

 <?php


 include('../dbcon.php');


 $qury="SELECT * FROM `fee` WHERE   `rollno`='$id' ";
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
   <td><?php echo $data["trans_id"]?></td>
   <td><?php echo $data["sem"]?></td>
   <td><?php echo $data["total"]?></td>


 </tr>

 <?php

 }

 }


  ?>

 </table>

 </body>
 </html>
