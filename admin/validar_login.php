<?php
$username=$_POST['username'];
if($username=='admin')
{
	$hash='$2y$10$eRr6fQ56Z7xmSrq7afp.YOzrFRaXk84lXepRI2DJc97Hdhk2m1Yqe';
}else if($username=='adminloteria')
{
	$hash='$2b$10$7mRC.J2fLCJ4.0BXbaNNfORlZWbY01e86dSgkVq9Gtts9MYGr/iqG';
}
$password=$_POST['password'];


if(password_verify($password, $hash))
{
	echo 1;
	session_start();
	$_SESSION['USERNAME'] = $username;
	if($username=='admin'){
		$_SESSION['ID'] = 1;
	}else{
		$_SESSION['ID'] = 2;
	}
	
}



?>