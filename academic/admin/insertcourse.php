<?php
session_start();

if(isset($_SESSION['uid']))
{

}
else {
  header('location:../adminlogin.php');
}


 ?>
<?php
include('header.php');
include('headtitle.php');
 ?>

 <form  action="insertcourse.php" method="post" enctype="multipart/form-data">
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
       <td>DEPARTMENT</td>
       <td>: <input class="xy" type="text" name="dept"  required></td>
     </tr>
     <tr>
       <td>COURSE ID</td>
       <td>: <input  class="xy" type="text" name="courseid"></td>
     </tr>
     <tr>
       <td>COURSE NAME</td>
       <td>: <input  class="xy" type="text" name="cname"></td>
     </tr>
     <tr>
       <td>COURSE CREDIT</td>
       <td>: <input  class="xy" type="text" name="ccredit"></td>
     </tr>
     <tr>
       <td>SYLLABUS</td>
       <td>: <input type="file" name="syl" required></td>
     </tr>

   </table>
   <input class="bt" type="submit" name="submit" value="ADD COURSE" style="margin-left: 650px;">

 </form>

</body>
</html>


<?php
if(isset($_POST['submit']))
{
  include('../dbcon.php');
$dname=$_POST["dept"];
$cid=$_POST["courseid"];
$cname=$_POST["cname"];
$ccredit=$_POST["ccredit"];
$syl=$_FILES['syl']['name'];
$tempsyl=$_FILES['syl']['tmp_name'];
move_uploaded_file($tempsyl,"../img2/$syl");


$qury="INSERT INTO `depatment`(`dname`, `course_id`, `course_name`, `course_credit`, `syllabus`) VALUES ('$dname','$cid','$cname','$ccredit','$syl')";
$run=mysqli_query($con,$qury);
if($run==true)
{
  ?>
  <script>
    alert('data saved successfully');
  </script>
  <?php
}

}

?>
