<?php
	session_start();
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'userregistration');
	$fn=$_POST['name'];
	$ln=$_POST['surname'];
	$email=$_POST['user'];
	$password=$_POST['password'];
	$confirm=$_POST['pass'];

	$s="select * from usertable where email='$email'";
	$result=mysqli_query($conn,$s);
	$num=mysqli_num_rows($result);

	if($num==1)
	{
		echo "Registration Successful";
	}
	else
	{
		$reg="insert into usertable(fn,ln,email,password,confirm) values ('$fn','$ln','$email','$password','$confirm')";
		mysqli_query($conn,$reg);
		echo "Registration Successful";
	}

?>