<?php
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$dbname="prodregister";
try{
	$conn=new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo"connection failed:".$e->getMessage();
	exit;
}
?>