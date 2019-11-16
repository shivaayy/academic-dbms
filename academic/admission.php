<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMISSION</title>
    <style media="screen">
      body {background-color: #686565;}
      h1 {color: rgb(215,188,233);text-align:center; padding-top: 30px; font-size: 40px;}
      table {color:lightsalmon;padding-top: 30px;}
      tr {font-size: 30px;padding-top: 30px;}
      input {border-radius: 25px; border: 1px solid #609; padding:20px;
              width: 200px; font-size: 20px; color: rgb(197,202,202);
               height: 15px; background:transparent; required}
    </style>
  </head>
  <body>
     <h1>STUDENT ADMISSION FORM</h1>
     <form class="" action="insertStudent.php" method="POST">
       <table align="center">
         <tr>
           <td>NAME</td>
           <td>: <input type="text" name="name" required></td>
         </tr>
         <tr>
           <td>ROLL NO</td>
           <td>: <input type="text" name="roll_no" required></td>
         </tr>
         <tr>
           <td>EMAIL</td>
           <td>: <input type="email" name="e_mail" required></td>
         </tr>
         <tr>
           <td>ADDRESS</td>
           <td>: <input type="text" name="addr" required></td>
         </tr>
         <tr>
            <td>DOB</td>
            <td>: <input type="text" name="dob" required></td>
          </tr>
         <tr>
           <td>MOBILE NO</td>
           <td>: <input type="text" name="ph_no" required></td>
         </tr>
         <tr>
           <td>BATCH</td>
           <td>: <input type="text" name="batch" required></td>
         </tr>
         <tr>
           <td>DEPARTMENT</td>
           <td>: <input type="text" name="department" required></td>
         </tr>
        
       </table>
       <input type="submit"  value="ADD STUDENT" style="width: 200px;
        font-size:20px ; margin-left:655px ; height:45px ;padding: 10px 10px 10px 10px ;background-color: aquamarine;border: 1px solid #609;
        color:#000000;font-size:20px ;margin-top:18px;
        ">

     </form>

  </body>
</html>
