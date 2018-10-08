<?php
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

  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
    //echo "<script>alert('Connection failed with the database!');</script>";
  }
  $qins = "insert into players (PNAME,CNAME,MOBILE,EMAIL,UNAME,PASS) values ('".$playername."','".$college."',".$mobile.",'".$email."','".$username_player."','".$password_player."')";
  $result = $conn->query($qins);
  if($result){
    //header("location: regsuccess.php");
    echo"<script>window.location= 'regsuccess.php'</script>";
  }
  else{
    echo "<script>alert('Your have already registered')</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Web Quest 4.0 Registration</title>
	<meta charset='UTF-8'>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<!--<link rel="Stylesheet" href="./css/login1.css" type="text/css"/>
	<link rel="Stylesheet" href="./css/login2.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="css/regi.css" >-->
  <link href="https://fonts.googleapis.com/css?family=Almendra" rel="stylesheet">  
	<style>
		body{
		font-family: 'Almendra',serif;
		
		}
		.form--login input[type="submit"]
		{
			cursor: pointer;
		}
      <style>
  body{
    font-family: 'Almendra',serif;

  }

  @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
  [class*="fontawesome-"]:before {
    font-family: 'FontAwesome', sans-serif;
  }

  * {
    box-sizing: border-box;
  }

  html {
    height: 100%;
  }

  body {
    min-height: 100%;
  }

  input {
    border: 0;
    color: inherit;
    font: inherit;
    margin: 0;
    outline: 0;
    padding: 0;
    -webkit-transition: background-color .3s;
    transition: background-color .3s;
  }

  .site__container {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-top : -50px;
  }

  .form input[type="password"], .form input[type="text"], .form input[type="submit"] {
    width: 100%;

  }
  .form--login {
    color: #fff;
  }
  .form--answer
  {
    color:#fff;
  }
  .form--login label,
  .form--login input[type="text"],
  .form--login input[type="password"],
  .form--login input[type="tel"],
  .form--login input[type="email"],
  .form--login input[type="submit"] {
    border-radius: 0.25rem;
    padding: 1rem;
  }
  .form--login label {
    background-color: #363b41;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }
  .form--login input[type="text"], .form--login input[type="password"] {
    background-color: #3b4148;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .form--login input[type="text"]:focus, .form--login input[type="text"]:hover, .form--login input[type="password"]:focus, .form--login input[type="password"]:hover {
    background-color: #434A52;
  }


  .form--login input[type="tel"], .form--login input[type="password"] {
    background-color: #3b4148;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .form--login input[type="tel"]:focus, .form--login input[type="tel"]:hover, .form--login input[type="password"]:focus, .form--login input[type="password"]:hover {
    background-color: #434A52;
  }


  .form--login input[type="email"], .form--login input[type="password"] {
    background-color: #3b4148;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .form--login input[type="email"]:focus, .form--login input[type="email"]:hover, .form--login input[type="password"]:focus, .form--login input[type="password"]:hover {
    background-color: #434A52;
  }



  .form--login input[type="submit"] {
    background-color: #ee672f;
    color: #eee;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
  }
  .form--login input[type="submit"]:focus, .form--login input[type="submit"]:hover {
    background-color: #ff8000;
    cursor: pointer;
  }
  .form__field {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 1rem;
  }
  .form__input {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
  }

  .align {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
  }

  .hidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }

  .text--center {
    text-align: center;
  }

  .grid__container {
    margin: 0 auto;
    max-width: 20rem;
    width: 90%;
  }

  /*login 2*/
  /*@import url(http://fonts.googleapis.com/css?family=Monda:400,700);*/
/*@import url(http://fonts.googleapis.com/css?family=Bastarda);
@import url('https://fonts.googleapis.com/css?family=Almendra');
@font-face{
   font-family: Almendra;
    src: url('../fonts/almendra/Almendra-Bold.ttf');
    }*/

    /* Basic CSS */
    * {
      margin: 0px;
      padding: 0px;
      position: relative;
    }

    body {
      /*font-family: 'Almendra', serif !important;*/
      color: #e3dedb; !important;
    }

    .wrapper {
      width: 500px;
      margin: 25px auto 100px auto;
    }

    .font-area {
      text-align: center;
      letter-spacing: 0.2em;
    }

    .quest-head {
      font-size: 4em;
      text-align: center;
      text-shadow: 1px 3px 3px #000;
    }

    .footLine {
      width: 100%;
      height: 2px;
      background: #d7b748;
      box-shadow: 0px 0px 5px #d7b748;
      display: block;
      margin: 10px 0px 10px 0px;
      box-shadow: 1px 1px 1px #000;
    }

    .slogan {
      font-size: 1.7em !important;
      text-shadow: 0px 0px 1px #d7b748;
      letter-spacing: -0.01em;
      text-shadow: 1px 3px 3px #000;
    }

    .container {
      width: 500px;
      height: 180px;
    }

    .circle {
      width: 150px;
      height: 150px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-left: -75px;
      margin-top: -75px;
      border-radius: 360px;
      z-index: 9999;
    }

    .inCirc {
      -moz-border-radius: 360px;
      -webkit-border-radius: 360px;
      border-radius: 360px;
      position: absolute;
      top: 50%;
      left: 50%;
    }

    .small {
      width: 50px;
      height: 50px;
      margin-left: -25px;
      margin-top: -25px;
      background: #ee672f;
      z-index: 9999;
      box-shadow: 1px 3px 3px #000;
    }

    .middle {
      width: 110px;
      height: 110px;
      margin-left: -55px;
      margin-top: -55px;
      background: #2c3338;
      z-index: 900;
    }

    .large {
      width: 150px;
      height: 150px;
      margin-left: -75px;
      margin-top: -75px;
      background: #d4af37;
      box-shadow: 1px 3px 3px #000;
    }

    .bgBorder {
      height: 20px;
      position: absolute;
      box-shadow: 1px 3px 3px #000;
      border-radius: 50px / 10px;
      background: #ee672f;
    }

    .top {
      width: 350px;
      top: 35px;
      left: 80px;
    }

    .center {
      width: 450px;
      top: 80px;
      left: 20px;
    }

    .bottom {
      width: 350px;
      bottom: 35px;
      left: 80px;
    }
    * {
      margin: 0px;
      padding: 0px;
      position: relative;
    }

    body {
      /*font-family: 'Almendra', serif !important;*/
      color: #e3dedb; !important;
    }

    .wrapper {
      width: 500px;
      margin: 25px auto 100px auto;
    }

    .font-area {
      text-align: center;
      letter-spacing: 0.2em;
    }

    .quest-head {
      font-size: 4em;
      text-align: center;
      text-shadow: 1px 3px 3px #000;
    }

    .footLine {
      width: 100%;
      height: 2px;
      background: #d7b748;
      box-shadow: 0px 0px 5px #d7b748;
      display: block;
      margin: 10px 0px 10px 0px;
      box-shadow: 1px 1px 1px #000;
    }

    .slogan {
      font-size: 1.7em !important;
      text-shadow: 0px 0px 1px #d7b748;
      letter-spacing: -0.01em;
      text-shadow: 1px 3px 3px #000;
    }

    .container {
      width: 500px;
      height: 180px;
    }

    .circle {
      width: 150px;
      height: 150px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-left: -75px;
      margin-top: -75px;
      border-radius: 360px;
      z-index: 9999;
    }

    .inCirc {
      -moz-border-radius: 360px;
      -webkit-border-radius: 360px;
      border-radius: 360px;
      position: absolute;
      top: 50%;
      left: 50%;
    }

    .small {
      width: 50px;
      height: 50px;
      margin-left: -25px;
      margin-top: -25px;
      background: #ee672f;
      z-index: 9999;
      box-shadow: 1px 3px 3px #000;
    }

    .middle {
      width: 110px;
      height: 110px;
      margin-left: -55px;
      margin-top: -55px;
      background: #2c3338;
      z-index: 900;
    }

    .large {
      width: 150px;
      height: 150px;
      margin-left: -75px;
      margin-top: -75px;
      background: #d4af37;
      box-shadow: 1px 3px 3px #000;
    }

    .bgBorder {
      height: 20px;
      position: absolute;
      box-shadow: 1px 3px 3px #000;
      border-radius: 50px / 10px;
      background: #ee672f;
    }

    .top {
      width: 350px;
      top: 35px;
      left: 80px;
    }

    .center {
      width: 450px;
      top: 80px;
      left: 20px;
    }

    .bottom {
      width: 350px;
      bottom: 35px;
      left: 80px;
    }
    html { 
      background: url('images/backreg.jpg') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      width: 100%;
      height: 100%;
    }
/*
body{
  background-image: url('images/back1.jpg');
  width: 100%;
  height: auto;
  background-repeat: no-repeat;
  background-size: contain;

  }*/
  .logo
  {

  }
  a:link
  {
    color: #d7b748;
  } 
  a: hover {
    color: #e3dedb;
  }
</style>
	</style>
	<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>

</head>
<body>
<div class="wrapper">
  <h1 class="quest-head">The Presidian</h1>
<div class="container-fluid">
	<center>
      <img src="images/symbol2.png" alt="logo" class="img img-responsive logo">
    </center>
    </div>
    <div class="font-area">
     <span class="footLine"></span>
     <p class="slogan">"Seek and ye shall find"</p>
   </div>
 </div>
 <div class="site__container">
  <div class="grid__container">
    <form action="" method="post" class="form form--login" autocomplete="on">
      <div class="form__field">
        <label><img src="./images/pword.png"><span class="hidden">Name</span></label>
        <input name="login__playername" id="login__playername" type="text" class="form__input" placeholder="Name" required>
      </div>
      <div class="form__field">
        <label><img src="./images/pword.png"><span class="hidden">College</span></label>
        <input name="login__collegename" id="login__collegename" type="text" class="form__input" placeholder="College" required>
      </div>
      <div class="form__field">
        <label><img src="./images/pword.png"><span class="hidden">Mobile</span></label>
        <input name="login__mobile" id="login__mobile" type="tel" class="form__input" maxlength="10" placeholder="Mobile" required>
      </div>
      <div class="form__field">
        <label><img src="./images/pword.png"><span class="hidden">Email</span></label>
        <input name="login__email" id="login__email" type="email" class="form__input" placeholder="Email" required>
      </div>
      <div class="form__field">
        <label><img src="./images/pword.png"><span class="hidden">Username</span></label>
        <input name="login__username" id="login__username" type="text" class="form__input" placeholder="Username" required>
      </div>
      <div class="form__field">
        <label><img src="./images/pword.png"><span class="hidden">Password</span></label>
        <input name="login__password" id="login__password" type="password" class="form__input" placeholder="Password" required>
      </div>
      <div class="form__field">
       <input name="register" id="register" type="submit" value="Register">
     </div>
     <!--<div class="form__field">
       <a href="loginr1.php"><input name="login" id="login" type="submit" value="Login" disabled="false"></a>
     </div>-->
   </form>
   <a href="loginr1.php" style="text-decoration: none"><h1 style="color: #dedb47; padding-left: 0%; background-color: rgba(0,0,0,0.6); margin-bottom: 20px; text-align: center;">Take me to Round 1</h1></a>
 </div>
</div>	

</body>
</html>
