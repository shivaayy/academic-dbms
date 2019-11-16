<?php

include('header2.php');
include('header1.php');

 ?>


 <table align="center">
   <tr>


 <form action="updatelib.php"method="post" >
   <th>
     ROLL NO
     <td>
       <input  class="up" type="text" name="rollno" placeholder="enter roll no" />
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
 <th > ROLLNO</th>
 <th>  BOOK ID</th>
 <th>BOOK NAME</th>
 <th>
   ISSUED DATE
 </th>
 <th>RETURN DATE</th>
 <th>EDIT</th>

 </tr>

 <?php
 if(isset($_POST['submit']))
 {
 include('../dbcon.php');
 $rollno=$_POST['rollno'];

 $qury="SELECT * FROM `lib` WHERE rollno='$rollno'";
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
   <td><?php echo $data["book_id"]?></td>
   <td><?php echo $data["book_name"]?></td>
   <td><?php echo $data["issued_date"]?></td>
   <td><?php echo $data["return_date"]?></td>

   <td><a href="update1form.php ? sid=<?php echo $data['rollno'] ?> ">EDIT</a></td>


 </tr>



 <?php

 }



 }


 }




 ?>
 </table>

 </body>
 </html>
