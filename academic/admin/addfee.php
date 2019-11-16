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


 <form  action="addfee.php" method="post" enctype="multipart/form-data">
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
       <td>ROLLNO</td>
       <td>: <input class="xy" type="text" name="rollno"  required></td>
     </tr>
     <tr>
       <td>TRANSFER ID</td>
       <td>: <input  class="xy" type="text" name="trans"></td>
     </tr>
     <tr>
       <td>SEM</td>
       <td>: <input  class="xy" type="text" name="sem"></td>
     </tr>
     <tr>
       <td>TOTAL AMOUNT</td>
       <td>: <input  class="xy" type="text" name="paid"></td>
     </tr>

   </table>
   <input class="bt" type="submit" name="submit" value="ADD FEE" style="margin-left: 650px;">

 </form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
  include('../dbcon.php');
$rollno=$_POST["rollno"];
$trans=$_POST["trans"];
$sem=$_POST["sem"];
$total=$_POST["paid"];

$qury="INSERT INTO `fee`(`rollno`, `trans_id`, `sem`, `total`) VALUES ('$rollno','$trans','$sem','$total')";
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
