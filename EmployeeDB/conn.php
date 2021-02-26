<?php
$servername='localhost';
$username='root';
$password='';
$dbname="Employee";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('could not connect My Sql:' .mysql_error());
}
else
{
echo "Database connected";
}
?>