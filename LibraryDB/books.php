<html>
<body bgcolor="yellowgreen">
<form action="main.html" method="post">
<center><br><br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{

$tit=$_POST['title'];
$auor=$_POST['name'];
$pusher=$_POST['uname'];
$qtity=$_POST['quantity'];
$pce=$_POST['price'];
$sql="INSERT INTO lib(Title, AuthorName, PublisherName, Quantity, Price)VALUES('$tit','$auor','$pusher','$qtity','$pce')";
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