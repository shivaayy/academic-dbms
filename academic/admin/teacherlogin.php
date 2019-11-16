<?php
session_start();
if(isset($_SESSION['uid']))
{
header('location:teacher/dashboard.php');

}
 ?>


<!DOCTYPE>
<html>
    <head>
        <title>
                Teacher Login Window
        </title>
    </head>
    <body style="background-color: rgb(104, 101, 101);">
            <h1 style="color: rgb(215, 188, 233);text-align: center;padding-top: 90px;font-size: 40px;" >
              TEACHER  USER LOGIN
            </h1>
            <form action="teacherlogin.php" method="POST">
                <table align="center" style="color:lightsalmon;padding-top: 30px">
                    <tr style="font-size: 30px;padding-top: 30px;"> <th>   Username : </th>
                         <td>
                             <input type="text" name="username" style="border-radius: 25px;
                             border: 1px solid #609;
                             padding: 20px;
                             width: 200px;
                             font-size: 20px;
                             color: rgb(197, 202, 202);
                             height: 15px;
                             background:transparent;"  required/>

                         </td>
                    </tr>
                    <tr style="font-size: 30px;padding-top: 30px;"> <th>   Password : </th>
                         <td>
                                <input type="password" name="password" style="border-radius: 25px;
                                border: 1px solid #609;
                                padding: 20px;
                                font-size: 20px;
                                width: 200px;
                                height: 15px;
                                color: rgb(197, 202, 202);
                                background: transparent;" required/>
                         </td>
                    </tr>


                    <tr style=""> <th>    </th> <td >   <input type="submit" name="login" value="Login" style="border-radius: 25px;
                    border: 1px solid #609;
                    width: 150px;
                    font-size:20px ;
                     background-color: aquamarine;padding: 5px 10px;"/>   </td>                </tr>
                </table>

            </form>


    </body>



</html>






<?php
include('dbcon.php');

if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$qury="SELECT * FROM `teacher` WHERE `name`='$username' and `id`='$password'";
$ron =mysqli_query($con,$qury);
$row=mysqli_num_rows($ron);
if($row<1)
{
  ?>
  <script>
    alert('username or password is incoorect' );
    window.open('teacherlogin.php','_self');
  </script>
  <?php
}
else {
  $data=mysqli_fetch_assoc($ron);
  $id=$data['id'];


  $_SESSION['uid']=$id;
  header('location:teacher/dashboard.php');
}

}


 ?>
