<?php
include('header.php');
include('headtitle.php');
 ?>



<table align="center">
  <tr>


<form action="updatestudent.php"method="post" >
  <th>
    dept
    <td>
      <input class="up" type="text" name="department" placeholder="enter department" />
    </td>
  </th>
  <th>
    year
    <td>
      <input class="up"  type="text" name="year" placeholder="enter batch" />
    </td>
  </th>
  <td>
    <input  class="bt" type="submit" name="submit" value="submited" >


  </td>

</form>
</tr>
</table>
<table align="center" width="80%" border="1">
<tr style="background-color:blue;">
<th >  rollno</th>
<th>  name</th>
<th>address</th>
<th>mobile</th>
<th>e_mail</th>
<th>dob</th>
<th>batch</th>
<th>department</th>
<th>edit</th>

</tr>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
$dept=$_POST['department'];
$batch=$_POST['year'];
$qury="SELECT * FROM `student` WHERE `dept`='$dept' and `batch`='$batch'";
$run=mysqli_query($con,$qury);
if(mysqli_num_rows($run)<1)
{
  echo"no data found";
}
else {
  $i=0;
  while($i<mysqli_num_rows($run))
{
  $data=mysqli_fetch_assoc($run);
$i++; ?>
<tr >
  <td><?php echo $data["id"]?></td>
  <td><?php echo $data["name"]?></td>
  <td><?php echo $data["dob"]?></td>
  <td><?php echo $data["address"]?></td>
  <td><?php echo $data["mobile_no"]?></td>
  <td><?php echo $data["e-mail"]?></td>
  <td><?php echo $data["batch"]?></td>
  <td><?php echo $data["dept"]?></td>
  <td><a href="updateform.php ? sid=<?php echo $data['id'] ?>">EDIT</a></td>


</tr>



<?php

}



}


}



 ?>

</table>


</body>
</html>
