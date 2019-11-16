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

<form  method="post" action="insertStudent.php" enctype="multipart/form-data">
  <style media="screen">
  .xy
  {
    width:180px;
                height:30px;
                border:1px;
                border-radius: 20px;
                padding: 6px 23px;
                   font-size: 26px;
                   background: transparent;
                   color: rgb(197, 202, 202);
                   border: 1px solid #609;}

  </style>
  <table   align="center">
        <tr>
          <td>NAME</td>
          <td >: <input class="xy" type="text" name="name" required></td>
        </tr>
        <tr>
          <td>ROLL NO</td>
          <td>: <input class="xy"type="text" name="roll_no" required></td>
        </tr>
        <tr>
          <td>EMAIL</td>
          <td>: <input class="xy" type="email" name="e_mail" required></td>
        </tr>
        <tr>
          <td>ADDRESS</td>
          <td>: <input class="xy" type="text" name="addr" required></td>
        </tr>
        <tr>
           <td>DOB</td>
           <td>: <input class="xy" type="text" name="dob" required></td>
         </tr>
        <tr>
          <td>MOBILE NO</td>
          <td>: <input  class="xy" type="text" name="ph_no" required></td>
        </tr>
        <tr>
          <td>BATCH</td>
          <td>: <input class="xy" type="text" name="batch" required></td>
        </tr>
        <tr>
          <td>DEPARTMENT</td>
          <td>: <input  class="xy" type="text" name="department" required></td>
        </tr>

      </table>
      <input class="bt" type="submit" name="submit" value="ADD STUDENT" style="margin-left: 650px;">


</form>


</body>
</html>



<?php

if(isset($_POST['submit']))
{
include('../dbcon.php');
$name=$_POST["name"];
$roll_no=$_POST["roll_no"];
$dob=$_POST["dob"];
$addr=$_POST["addr"];
$ph_no=$_POST["ph_no"];
$e_mail=$_POST["e_mail"];
$batch=$_POST["batch"];
$department=$_POST["department"];
$qurry="INSERT INTO `student`(`id`, `name`, `dob`, `address`, `mobile_no`, `e-mail`, `batch`, `dept`) VALUES('$roll_no','$name','$dob','$addr','$ph_no','$e_mail','$batch','$department')";

 $run=mysqli_query($con,$qurry);
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
