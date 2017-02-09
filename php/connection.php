<?php
$servername="localhost";
$username="root";
$password="";
$conn="";
 $conn=new PDO("mysql:host=$servername;dbname=smartgov",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	if (!isset($_SESSION)){session_start();}// Starting Session
?>