<html>
<body bgcolor="yellowgreen">
<form action="main.html" method="post">
<center><br><br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{

$nam=$_POST['ProductName'];
$qtity=$_POST['Quantity'];
$pce=$_POST['Price'];
$sql="INSERT INTO PDT(ProductName, Quantity, Price)VALUES('$nam','$qtity','$pce')";
if(mysqli_query($conn, $sql))
{
echo  "new record created sucessfully!<br>";
}
else
{
echo   "Error:" .$sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br>
<input type="submit" value="Back to home page" name="Submit">
</center>
</body>
</html>