<?php
include('../admin/header.php');
include('head.php');

 ?>

<table align="center">
  <tr>


<form action="viewpaper.php"method="post" >
  <th>
    dept
    <td>
      <input class="up" type="text" name="coursecode" placeholder="enter course id" />
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
<th >  course id</th>
<th>  duration</th>
<th>date</th>
<th>test_type</th>
<th>paper</th>

</tr>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
$course=$_POST['coursecode'];

$qury="SELECT * FROM `ques` WHERE `course_id`='$course' ";
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
  <td><?php echo $data["course_id"]?></td>
  <td><?php echo $data["duration"]?></td>
  <td><?php echo $data["date"]?></td>
  <td><?php echo $data["test_type"]?></td>
  <td><a href="../img2/<?php echo $data['paper'] ?>" target="_blank"><?php echo $data['paper']?>['name']</td>



</tr>



<?php

}



}


}




 ?>

</table>


</body>
</html>
