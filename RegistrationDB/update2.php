<html>
<head>
<title>Update data</title>
</head>
<body bgcolor="Cyan">
<form method="post" action="update3.php">
<center>
<?php
include_once  'conn.php';
$rid=$_POST['id'];
$sql= "SELECT * FROM s1 where frmid='$rid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<?php
if($row=mysqli_fetch_assoc($result)){
?>
Form id:&nbsp&nbsp <input type="text" value="<?php echo $row["frmid"];
?>" name="id"><br><br>

<b>UserName &nbsp&nbsp</b>
<input type="text" value="<?php echo $row["Name"];?>"
name="upduname"<br><br>

<b>Password &nbsp&nbsp</b>
<input type="text" value="<?php echo $row["Password"];?>"
name="password2"<br><br>

<b>Gender &nbsp&nbsp</b>
<input type="radio" name="gender1"  value="male"<?php 
if($row["Gender"]=="male"){echo  "checked";}?>/>Male
<input type="radio" name="gender1"  value="female"<?php 
if($row["Gender"]=="female"){echo  "checked";}?>/>Female
<br><br>

<b>Email &nbsp&nbsp</b>
<input type="text" value="<?php echo $row["Email"];?>"
name="email"><br><br>

<b>Phoneno &nbsp&nbsp
<select name="code">
<option <?php if($row["Phoneno"]=="977"){echo  "Selected";}?>>977</option>
<option <?php if($row["Phoneno"]=="978"){echo  "Selected";}?>>978</option>
<option <?php if($row["Phoneno"]=="979"){echo  "Selected";}?>>979</option>
<option <?php if($row["Phoneno"]=="973"){echo  "Selected";}?>>973</option>
<option <?php if($row["Phoneno"]=="972"){echo  "Selected";}?>>972</option>
<option <?php if($row["Phoneno"]=="974"){echo  "Selected";}?>>974</option>
</select>

<input type="text" value="<?php echo $row["Phoneno2"];?>"
name="Phoneno2"<br><br>
<input type="Submit" value="Update" name="submit">
<?php
}
?>
<?php
}
else{
echo   "No result found";
}
?>
</center>
</form>
</body>
</html>
