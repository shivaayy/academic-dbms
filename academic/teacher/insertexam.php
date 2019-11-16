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
  <h1 align="center">Exam Detail</h1>
  <form class="" action="insertexam.php" method="POST" enctype="multipart/form-data">
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
        <td>BATCH</td>
        <td>: <input class="xy" type="text" name="batch" required></td>
      </tr>
      <tr>
        <td>COURSE ID</td>
        <td>: <input class="xy" type="text" name="c_id" required></td>
      </tr>
      <tr>
        <td>EXAM DATE</td>
        <td>: <input class="xy" type="text" name="e_date" required></td>
      </tr>

      <tr>
         <td>DURATION</td>
         <td>: <input class="xy" type="text" name="dur" required></td>
       </tr>
       <tr>
         <td>TEST TYPE</td>
         <td>: <input class="xy" type="text" name="t_type" ></td>
       </tr>
       <tr>
         <td>DEPARTMENT</td>
         <td>: <input class="xy" type="text" name="dept" ></td>
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

$batch=$_POST['batch'];
$cid=$_POST['c_id'];
$edate=$_POST['e_date'];
$dur=$_POST['dur'];
$test=$_POST['t_type'];
$dept=$_POST['dept'];


$qury="INSERT INTO `exam`(`batch`, `course_id`, `exam_date`, `duration`, `test_type`, `department`) VALUES ('$batch','$cid','$edate','$dur','$test','$dept')";
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
