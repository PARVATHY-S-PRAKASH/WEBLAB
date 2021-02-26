<html>
<body bgcolor="lightblue">
<form action="main.html" method="post">
<center><br><br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{

$nam=$_POST['name'];
$dep=$_POST['dept'];
$de=$_POST['des'];
$ge=$_POST['gen'];
$sa=$_POST['sal'];
$sql="INSERT INTO emp(Name, Department, Designation, Gender, salary)VALUES('$nam','$dep','$de','$ge','$sa')";
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