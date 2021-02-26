<html>
<body bgcolor="yellowgreen">
<form action="main1.html" method="post">
<center><br><br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
$fname=$_POST['uname'];
$pass=$_POST['password'];
$gen=$_POST['gender'];
$em=$_POST['email'];
$ph1=$_POST['code'];
$ph2=$_POST['phno'];
$sql="INSERT INTO s1(Name,Password,Gender,Email,Phoneno,Phoneno2)VALUES('$fname','$pass','$gen','$em','$ph1','$ph2')";
if(mysqli_query($conn, $sql))
{
echo  "new record created sucessfully!<br>";
}
else
{
echo   "Error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br>
<input type="submit" value="Back to home page" name="Submit">
</center>
</body>
</html>