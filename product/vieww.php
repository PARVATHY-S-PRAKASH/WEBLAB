<html>
<head>
<title>Retrieve data</title>
</head>
<body bgcolor="Lightpink">
<form action="main.html" method="post" >
<center>
<?php
include_once  'conn.php';
$sql= "SELECT * FROM PDT";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>Id</th>
<th>ProductName</th>
<th>Quantity</th>
<th>Price</th>
</tr>

<?php
$i=0;
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row["Id"];?></td>
<td><?php echo $row["ProductName"];?></td>
<td><?php echo $row["Quantity"];?></td>
<td><?php echo $row["Price"]; ?></td>
</tr>

<?php
$i++;
}
?>
</table>

<?php
}
else{
echo  "No result found";
}
?>
<br><br>
<input type="submit" value="Back to home page" name="submit">
</center>
</form>
</body>
</html>