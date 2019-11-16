<?php
include('header.php');
include('headtitle.php');
?>

<table align="center">
  <tr>


<form action="updateteacher.php"method="post" >
  <th>
    dept
    <td>
      <input class="up" type="text" name="department" placeholder="enter department" />
    </td>
  </th>
  <th>
    name
    <td>
      <input class="up" type="text" name="name" placeholder="enter your name" />
    </td>
  </th>
  <td>
    <input class="bt" type="submit" name="submit" value="submited" >


  </td>

</form>
</tr>
</table>
<table align="center" width="80%" border="1">
<tr style="background-color:blue;">
<th >  t_id</th>
<th>  name</th>
<th>Department</th>
<th>dob</th>
<th>address</th>
<th>mobile_no</th>
<th>e-mail</th>
<th>salary</th>
<th>edit</th>

</tr>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
$dept=$_POST['department'];
$name=$_POST['name'];
$qury="SELECT * FROM `teacher` WHERE `dname`='$dept' and `name` like '%$name%'";
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
  <td><?php echo $data["dname"]?></td>
  <td><?php echo $data["dob"]?></td>
  <td><?php echo $data["addr"]?></td>
  <td><?php echo $data["mob"]?></td>
  <td><?php echo $data["email"]?></td>
  <td><?php echo $data["salaray"]?></td>
  <td><a href="updatetform.php ? sid=<?php echo $data['id'] ?>">EDIT</a></td>


</tr>



<?php

}



}


}




?>
</table>

</body>
</html>
