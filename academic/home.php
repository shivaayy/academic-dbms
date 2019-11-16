<?php
session_start();
if(isset($_SESSION['uid']))
{
header('home.php');

}
 ?>




<!DOCTYPE>
<html>
    <head>
        <title>
                LoginWindow
        </title>
    </head>
    <body style="background-color: dimgrey;">
      <style media="screen">

          .n{width:250px;
                      height:40px;
                      border:1px;
                      border-radius: 20px;
                      padding: 6px 30px;
                         font-size: 26px;
                         background: transparent;
                         color: rgb(197, 202, 202);
                         border: 1px solid #609;

                       }

              .a{font-size:25px;text-decoration: none;color:black;border: 1px solid #609;
                border-radius: 20px;
                height: 30px;
                width: 160px;padding-left: 16px;padding-top: 3px;
              background:rgb(174, 214, 241);}
      </style>
            <h1 style="color: rgb(200, 162, 238);text-align: center;padding-top: 90px;font-size: 40px;" >
                ACADEMIC MANAGEMENT
            </h1>
            <a class="a"href="adminlogin.php" style="display:inline-block ">Admin Login</a>
            <a class="a" href="teacherlogin.php" style=" margin-left: 950px;width:170px;padding-left: 15px;margin-right: 0px;display:inline-block">Teacher Login</a>
            <form action="home.php" method="POST">
                <table align="center" style="color:lightsalmon;padding-top: 30px">
                    <tr style="font-size: 30px;"> <th>   Username : </th>
                         <td  >
                           <input class="n" type="text" name="username"/>

                         </td>
                    </tr>
                    <tr style="font-size: 30px;"> <th>   Password : </th>
                         <td  >
                           <input class="n" type="password" name="password"/>

                         </td>
                    </tr>

                    <tr style="font-size: 20px;"> <th>    </th> <td >

                      <input type="submit" name="login" value="Login"
                      style="border-radius: 25px;
                    border: 1px solid #609;
                    width: 150px;
                    font-size:20px ;
                     background-color: aquamarine;padding: 5px 10px;"/>    </td>                </tr>
                </table>

            </form>


    </body>



</html>
<?php
if(isset($_POST['login']))
{
  include('dbcon.php');
  $name=$_POST['username'];
  $pass=$_POST['password'];
  $qury="SELECT * FROM `student` WHERE id='$name' and name='$pass'";
  $ron=mysqli_query($con,$qury);
  $row=mysqli_num_rows($ron);
  if($row<1)
  {
    ?>
    <script>
      alert('username or password is incorrect');
    </script>
    <?php
  }
  else {

    $data=mysqli_fetch_assoc($ron);
    $id=$data['id'];


    $_SESSION['uid']=$id;


    header('location:student/sdashboard.php   ');
  }


}

 ?>
