<!--<?php

if(isset($_POST["register"]))
{
	$playername=$_POST["login__playername"];
	$college=$_POST["login__collegename"];
	$mobile=$_POST["login__mobile"];
	$email=$_POST["login__email"];
	$username_player=$_POST["login__username"];
	$password_player=$_POST["login__password"];

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="wq";

	$link = mysqli_connect("localhost","root","","wq") ;
	if(!$link)
	{
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errorno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;

	}
	echo "Connection established". PHP_EOL;
	echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

//INSERT INTO `players`(`PNAME`, `CNAME`, `MOBILE`, `EMAIL`, `UNAME`, `PASS`) VALUES ('parth','geca',8806773555,'parthbhope1@gmail.com','parth123','parth123')
echo "<script>alert('".$playername.",".$college.",".$mobile.",".$email.",".$username_player.",".$password_player."')</script>";

$qins = "insert into players (PNAME,CNAME,MOBILE,EMAIL,UNAME,PASS) values ('".$playername."','".$college."',".$mobile.",'".$email."','".$username_player."','".$password_player."')"; // query to register as a new player

if(mysqli_query($link,$qins))
{
	echo "<script>alert('Registration Successful');</script>";
}
else {
	echo "<script>alert('try again');</script>";    
}

}
?>-->
<!DOCTYPE html>
<html>
<head>
	<title>Web Quest 4.0 Registration</title>
	<meta charset='UTF-8'>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Almendra" rel="stylesheet">
	<link rel="Stylesheet" href="./css/login1.css" type="text/css"/>
	<link rel="Stylesheet" href="./css/login2.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="css/regi.css" >
<link href="https://fonts.googleapis.com/css?family=Almendra" rel="stylesheet">
	<style>
		body{
		font-family: 'Almendra',serif;		
		color: #d7b748;
		}
	</style>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>

  
</head>
<body style="font-family: 'Almendra' serif;">
<div class="wrapper">
  <h1 class="quest-head">The Presidian</h1>
<div class="container-fluid">
	<center>
      <img src="images/symbol2.png" alt="logo" class="img img-responsive logo">
    </center>
    </div>
    <div class="font-area">
     <span class="footLine"></span>
     <h2 class="slogan">"Seek and ye shall find"</h2>
	<h1 >Registration Successful,Your Quest begins on 6th October at 2PM</h1>
	<h3 style= "background-color: rgba(0,0,0,0.3)">You can play till midnight,at 00:00 the link will be closed</h3>
   </div>
 </div>

</body>
</html>