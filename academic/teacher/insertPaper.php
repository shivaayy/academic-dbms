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

     <h1 align="center">Question Paper Detail</h1>
     <form class="" action="insertPaper.php" method="POST" enctype="multipart/form-data">

       <style media="screen">
                 .xy{width:180px;
                             height:30px;
                             border:1px;
                             border-radius: 20px;
                             padding: 6px 23px;
                                font-size: 26px;
                                background: transparent;
                                color: rgb(197, 202, 202);
                                border: 1px solid #609;}
       </style>
       <table align="center">
         <tr>
           <td>course id</td>
           <td>: <input class="xy" type="text" name="course_id" required></td>
         </tr>
         <tr>
           <td>duration</td>
           <td>: <input class="xy" type="text" name="duration" required></td>
         </tr>
         <tr>
           <td>date</td>
           <td>: <input class="xy" type="text" name="date" required></td>
         </tr>

         <tr>
            <td>test type</td>
            <td>: <input class="xy" type="text" name="test_type" required></td>
          </tr>
          <tr>
            <td>paper</td>
            <td>: <input class="xy" type="file" name="paper" required></td>
          </tr>

       </table>
       <input type="submit" name="submit" value="add" style="border-radius: 25px;
     border: 1px solid #609;
     width: 150px;
     font-size:20px ;
      background-color: aquamarine;padding: 5px 10px;
      margin-left: 600px;
        ">

     </form>

  </body>
</html>

<?php

if(isset($_POST['submit']))
{
include("../dbcon.php");

$course=$_POST['course_id'];
$dur=$_POST['duration'];
$date=$_POST['date'];
$test=$_POST['test_type'];
$paper=$_FILES['paper']['name'];
$temppaper=$_FILES['paper']['tmp_name'];
move_uploaded_file($temppaper,"../img2/$paper");

$qury="INSERT INTO `ques`(`course_id`, `duration`, `date`, `test_type`,`paper`) VALUES ('$course','$dur','$date','$test','$paper')";
$run=mysqli_query($con,$qury);
if($run==true)
{
?>
<script>
  alert('data successfully added');
</script>

<?php
}
else {
  echo"not submited";
}




}



 ?>
