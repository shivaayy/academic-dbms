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
include('../dbcon.php');
$tid=$_GET['sid'];
$qury="SELECT * FROM `teacher` WHERE `id`='$tid'";
$run=mysqli_query($con,$qury);
$data=mysqli_fetch_assoc($run);

 ?>

 <form  action="updatetdata.php" method="post" enctype="multipart/form-data">

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


   <table align="center">
     <tr>
       <td>ID</td>
       <td>: <input class="xy" type="text" name="t_id" value="<?php echo $data['id']  ?>"  required></td>
     </tr>
     <tr>
       <td>NAME</td>
       <td>: <input class="xy" type="text" name="name" value="<?php echo $data['name']  ?>"></td>
     </tr>
     <tr>
       <td>DEPARTMENT NAME</td>
       <td>: <input class="xy" type="text" name="d_name" value="<?php echo $data['dname']  ?>"></td>
     </tr>
     <tr>
       <td>DATE OF BIRTH</td>
       <td>: <input class="xy" type="text" name="dob" value="<?php echo $data['dob']  ?>"></td>
     </tr>
     <tr>
       <td>ADDRESS</td>
       <td>: <input class="xy" type="text" name="addr" value="<?php echo $data['addr']  ?>"></td>
     </tr>
     <tr>
       <td>MOBILE NO</td>
       <td>: <input class="xy" type="text" name="p_no" value="<?php echo $data['mob']  ?>"></td>
     </tr>
     <tr>
       <td>EMAIL</td>
       <td>: <input class="xy" type="email" name="email" value="<?php echo $data['email']  ?>"></td>
     </tr>
     <tr>
       <td>SALARY</td>
       <td>: <input class="xy" type="number" name="salary" value="<?php echo $data['salaray']  ?>"></td>
     </tr>
   </table>
 <input type="hidden" name="tid" value="<?php echo $data['id'] ?>"/>
   <input class="bt"type="submit" name="submit" value=" UPDATE" style="margin-left: 680px" >

 </form>
</body>
</html>
