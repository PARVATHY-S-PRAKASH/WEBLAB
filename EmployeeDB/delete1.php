<html>
<head>
<title>Retrive data</title>
</head>
<body bgcolor="orange">
<center>
<?php
include_once'conn.php';
$sql="SELECT * FROM emp";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">

<tr>
<th>Name</th>
<th>Department</th>
<th>Designation</th>
<th>Gender</th>
<th>Salary</th>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row["Id"]; ?></td>
<td><?php echo $row["Name"];?></td>
<td><?php echo $row["Department"];?></td>
<td><?php echo $row["Designation"];?></td>
<td><?php echo $row["Gender"];?></td>
<td><?php echo $row["Salary"];?></td>
</tr>
<?php
$i++;
}
?>
</table>
</tr><br><br><br>
<form method="post" action="delete2.php">
Enter the id  to delete :&nbsp&nbsp
<input type="text" name="id">
<br><br><br>
<input type="submit" name="submit" value="submit">
</form>

<?php
}
else{
echo"No result found";
}

mysqli_close($conn);
?>
</center>
</body>
</html> 








