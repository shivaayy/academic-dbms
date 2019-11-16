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
 ?>
 <div class="admintitle" align="center"  >
   <h1 align="center" style="padding-top:5px; font-size:40px">ADMIN  DASHBOARD</h1>
   <h4><a href="logout.php"  style="float:right;margin-right:10px;color:white" >logout</a></h4>
 </div>


 <div  class="dashboard" align="center" >
   <style media="screen">

     td{
       width:250px;
                   height:20px;
                   border:1px;
                   border-radius: 25px;
                   padding: 6px 63px;
                      font-size: 26px;
                      background: transparent;
                      color: rgb(197, 202, 202);
                      border: 1px solid #609;
     }
     a{color:rgb(200, 162, 238);
       text-decoration: none;
        font-size: 30px;
     }
   </style>
<table  align:"center" >
  <tr>

<th>1:</th>

    <td>
<a href="insertStudent.php" >insert student</a>

</td>
</tr>

  <tr>
    <th>2:</th>

    <td>
<a href="updatestudent.php">update student</a>

</td>
</tr>
  <tr>
    <th>3:</th>

    <td>
  <a href="deletestudent.php">delete student</a>

  </td>
</tr>
  <tr>
    <th>4:</th>

    <td>
  <a href="insertTeacher.php">insert teacher</a>

</td>
</tr>
  <tr>
    <th>5:</th>

    <td>
  <a href="updateteacher.php">update teacher</a>

</td>
</tr>
  <tr>
    <th>6:</th>

    <td>
  <a href="deleteteacher.php">delete teacher</a>

</td>
</tr>

<tr>
  <th>7:</th>

  <td>
<a href="addfee.php">insert fee details</a>

</td>
</tr>

<tr>
  <th>8:</th>

  <td>
<a href="insertcourse.php">insert courses</a>

</td>
</tr>

</table>

 </div>




</body>
</html>
