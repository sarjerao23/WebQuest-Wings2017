<?php
$servername="localhost";
$username="root";
$password="";
$dbname="wq";
 //connection
$conn=new mysqli($servername,$username,$password,$dbname);
      //check conn
if($conn->connect_error)
{
  die("Connection failed:".$conn->connect_error);
  //echo "<script>alert('Connection failed with the Database!');</script>";
}
else
{
  echo "<script>alert('Connection established');</script>";

  if(isset($_POST["next"]))
  {
    //$answer=strtolower($_POST["answer"]);
    $answer = str_replace(" ", "",strtolower($_POST['answer']));
    $sql="select answer from answers_round1 where id=2";
    $result=$conn->query($sql);
      if($result->num_rows>0)
      {
        while($row=$result->fetch_assoc())
          {
          $check=$row["answer"];
          }
      }
    if($check==$answer)
    {
      session_start();
      $sql="update participants_round1 set currques=3, logintime = CURRENT_TIMESTAMP() where uname = '".$_SESSION['user']."'";
                
      $result=$conn->query($sql);
      if($result)
      {
        
         // echo "<script>alert('Right answer');</script>";  
          header('location:enigma.php');
         
      }
     
    }            
    else
    {
      echo "<script>alert('Wrong Answer! Try Again!');</script>";
    }
  }
}  
?>

<html>
<head>

  <title>Question2</title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
 <!-- <link ref="stylesheet" href="bootstrap.min.css"> 
  <link rel="Stylesheet" href="../../css/login1.css" type="text/css"/>
  <link rel="Stylesheet" href="../../css/login2.css" type="text/css"/>
  <link rel="stylesheet"  href="styler1q2.css" type="text/css">-->
 <link href="https://fonts.googleapis.com/css?family=Almendra" rel="stylesheet">
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
/*login2*/

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
/*styler1q2*/
html
{
  background: url("images/back.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  width: 100%;
  height: 100%; 
  background-repeat: no-repeat;
  margin: 0 auto;     
}

.form--login input[type="submit"] {
  background-color: #03ac13;
  color: #eee;
  font-weight: bold;
  text-transform: uppercase;
}
.form--login input[type="submit"]:focus, .form--login input[type="submit"]:hover {
  background-color: #03c04a;
}

</style>

</head>
<script language="javascript">
  document.onmousedown=disableclick;
  status="Right Click Disabled";
  function disableclick(event)
  {
    if(event.button==2)
    {
     // alert(status);
     return false;    
   }
 
 }
</script>

        <body style="background-image: url('back.jpg'); min-width: 100%;">
         <div class="wrapper row" style="padding-top: 1%;">
          <div class="font-area">
           <h1>The Secret with 370 was lost</h1>
           <br>
           <h1>Where?</h1>
         </div>
       </div>
       <div class="site__container">
        <div class="grid__container">
          <form action="" method="post" autocomplete="off" class="form form--login">
            <div class="form__field">
              <label><img src="images/pword.png"><span class="hidden">Answer</span></label>
              <input name="answer" id="answer" type="text" class="form__input" placeholder="Answer" required>
            </div>
            <div class="form__field">
              <input name="next" id="next" type="submit" value="Answer">
            </div>
          </form>
        </div>
      </div>



    </body>
    </html>

