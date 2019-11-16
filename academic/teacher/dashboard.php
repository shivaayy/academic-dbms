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
  ?>
  <div class="admintitle" align="center">

    <h1>Teacher dashboard</h1>
    <h4><a href="../logout1.php" style="float:right;margin-right:10px;color:white">logout</a></h4>
  </div>



  <div  class="tdashboard" align="center">
    <style media="screen">
      td{
        width:250px;
                    height:40px;
                    border:1px;
                    border-radius: 20px;
                    padding: 6px 63px;
                       font-size: 26px;
                       

                       border: 1px solid #609;

      }
      a{ text-decoration: none;}
    </style>
 <table  align:"center" >
   <tr>
     <th>1:</th>

     <td>
 <a class="new" href="insertPaper.php">insert paper</a>

 </td>
 </tr>

 <tr>
<th>2:</th>
   <td>
<a class="new" href="insertresult.php">insertresult</a>

</td>
</tr>

<tr>
<th>3:</th>
  <td>
<a  class="new" href="updateresult.php">update result</a>

</td>
</tr>

<tr>
<th>4:</th>
  <td>
<a  class="new" href="viewstudent.php">view student</a>

</td>
</tr>
<tr>
<th>5:</th>
  <td>
<a  class="new" href="insertlib.php">libary details</a>

</td>
</tr>
<tr>
<th>6:</th>
  <td>
<a  class="new" href="updatelib.php">view and update libary</a>

</td>
</tr>

<tr>
<th>7:</th>
  <td>
<a  class="new" href="insertexam.php">insert exam</a>

</td>
</tr>
</table>
</body>
</html>
