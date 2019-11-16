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
 <form  action="insertTeacher.php" method="post" enctype="multipart/form-data">
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
       <td>ID</td>
       <td>: <input class="xy" type="text" name="t_id"  required></td>
     </tr>
     <tr>
       <td>NAME</td>
       <td>: <input  class="xy" type="text" name="name"></td>
     </tr>
     <tr>
       <td>DEPARTMENT NAME</td>
       <td>: <input  class="xy" type="text" name="d_name"></td>
     </tr>
     <tr>
       <td>DATE OF BIRTH</td>
       <td>: <input  class="xy" type="text" name="dob"></td>
     </tr>
     <tr>
       <td>ADDRESS</td>
       <td>: <input  class="xy" type="text" name="addr"></td>
     </tr>
     <tr>
       <td>MOBILE NO</td>
       <td>: <input class="xy"  type="text" name="p_no"></td>
     </tr>
     <tr>
       <td>EMAIL</td>
       <td>: <input  class="xy" type="email" name="email"></td>
     </tr>
     <tr>
       <td>SALARY</td>
       <td>: <input  class="xy" type="number" name="salary"></td>
     </tr>
   </table>
   <input class="bt" type="submit" name="submit" value="ADD TEACHER" style="margin-left: 650px;">

 </form>

</body>
</html>









<?php
if(isset($_POST['submit']))
{
  include('../dbcon.php');
$t_id=$_POST["t_id"];
$name=$_POST["name"];
$dob=$_POST["dob"];
$addr=$_POST["addr"];
$d_name=$_POST["d_name"];
$email=$_POST["email"];
$salary=$_POST["salary"];
$p_no=$_POST["p_no"];
$qury="INSERT INTO `teacher`(`id`, `name`, `dname`, `dob`, `addr`, `mob`, `email`, `salaray`) VALUES ('$t_id','$name','$d_name','$dob','$addr','$p_no','$email','$salary')";
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
