<?php

include 'db_functions.php';

if(isset($_POST['btn-register']))
{
		if (empty($_POST['email']) || empty($_POST['name'])||empty($_POST['surname'])||empty($_POST['username'])||empty($_POST['password'])||empty($_POST['confirm'])||empty($_POST['terms'])) {
		echo "Fill all the fields";

		}
else{

$email=$conn->quote($_POST['email']);
$password=$conn->quote($_POST['password']);
$confirm=$conn->quote($_POST['confirm']);
$terms=$conn->quote($_POST['terms']);
//$confirmation=0;
//$confirmcode=md5(uniqid(rand(), true)); 
/*
$username_check_dublicate = mysql_query("SELECT username FROM users WHERE username='".$username."'");
$email_check_dublicate = mysql_query("SELECT email FROM users WHERE email='".$email."'");
$insert='INSERT into users(username,email,password,confirmed,confirmation_code)VALUES("'.$username.'","'.$email.'","'.$password.'","'.$confirmation.'","'.$confirmcode.'")';
	if (mysql_num_rows($email_check_dublicate) >0){
		echo 'Account exist.';
        }
		
	elseif (mysql_num_rows($username_check_dublicate) >0){
		echo 'Username in use.';
        }
	elseif ($password!=$password2){
		echo 'Passwords are not the same';
        }
	else{
		mysql_query($insert);
		 echo 'Account created now Check email form confirmation';
		
		/*$email_msg="confirm your email address by click on url : http://localhost/wpage4/registration_complete.php?username=$username&code=$confirmcode";
		include 'email_confirmation.php';*/
	}
}
}
?>

		
		
		
		





