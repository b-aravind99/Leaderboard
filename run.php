<?php

$email=$_POST['uname'];
$password=$_POST['psw'];

$username=stripcslashes($email);
$password=stripcslashes($password);

$con=mysqli_connect("localhost","root","","Leaderboard");

$result=mysqli_query($con,"select * from logindata where Username='$username'")
or die("Failed to query database.mysql_error()");

$row=mysqli_fetch_array($result);
if($row['Password']===$password)
{
	header("Location:Leaderboard.php");
}
else
{
	echo "Password incorrect";
	header("Location:login.php"); 
}

?>
