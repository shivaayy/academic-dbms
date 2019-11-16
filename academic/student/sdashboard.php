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
include('../dbcon.php');
include('../admin/header.php');

$id=$_SESSION['uid'];
echo $id;

 ?>
 <div class="admintitle" align="center"  >
   <h1 align="center" style="padding-top:20px; font-size:40px">STUDENT  DASHBOARD</h1>

    <h4><a href="logout2.php"  style="float:right;margin-right:10px;color:white" >logout</a></h4>

 </div>


 <div  class="dashboard" align="center" >
   <style media="screen">
     a{text-decoration: none;}
     td{
       width:250px;
                   height:40px;
                   border:1px;
                   border-radius: 20px;
                   padding: 6px 63px;
                      font-size: 26px;
                      background: transparent;
                      
                      border: 1px solid #609;
     }
   </style>
 <table  align:"center" >
   <tr>

 <th>1:</th>

     <td>
 <a href="viewresult.php ">VIEW RESULT</a>

 </td>
 </tr>

   <tr>
     <th>2:</th>

     <td>
 <a href="viewlib.php">VIEW LIBRARY</a>

 </td>
 </tr>
   <tr>
     <th>3:</th>

     <td>
   <a href="viewfee.php">VIEW FEE</a>

   </td>
 </tr>
   <tr>
     <th>4:</th>

     <td>
   <a href="viewcourse.php">VIEW COURSE</a>

 </td>
 </tr>
   <tr>
     <th>5:</th>

     <td>
   <a href="viewpaper.php"> VIEW PAPER</a>

 </td>
 </tr>
   <tr>
     <th>6:</th>

     <td>
   <a href="viewexam.php">VIEW EXAM</a>

 </td>
 </tr>



 </table>


 </div>

</body>
</html>
