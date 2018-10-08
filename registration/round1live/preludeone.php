<!DOCTYPE html>
<html>
<head>
	<title> Web-Quest 4.0</title>
  <?php 
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="wq";
  $counter= 0;
  $question=0;
  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error)
  {
    die("Connection failed:".$conn->connect_error);
    echo "<script>alert('Connection failed with the database!');</script>";
  }
  else
  {
   // echo "<script>alert('Connection Successfull');</script>"; 
    if(isset($_POST['next']))
    { session_start();
      $sql3="insert into participants_round1(uname,currques,logintime,inittime) values ('".$_SESSION['user']."',1,CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP()) ";
      $result1=$conn->query($sql3);
      if($result1)
      {
        header('location:darker.php');// darker.php
      }
      else
      {
      echo "<script>alert('error');</script>";        
      }
    }
  }

  ?>
	<style >
		html {
  background-color: black;
  color:white;
  font-family: monospace;
  font-size:20px;
  }


.css-typing p{
  
  
  width: 100%;
  white-space: nowrap;
  overflow: hidden;
  -webkit-animation: type 5s steps(40, end);
  animation: type 5s steps(40, end);
}

.css-typing p:nth-child(2) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type2 5s steps(40, end);
  -webkit-animation-delay: 5s;
  animation-delay: 5s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}

.css-typing p:nth-child(3) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type3 5s steps(40, end);
  -webkit-animation-delay: 10s;
  animation-delay: 10s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;}

.css-typing p:nth-child(4) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type4 5s steps(40, end);
  -webkit-animation-delay: 15s;
  animation-delay: 15s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(5) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type5 5s steps(40, end);
  -webkit-animation-delay: 20s;
  animation-delay: 20s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(6) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type6 5s steps(40, end);
  -webkit-animation-delay: 25s;
  animation-delay: 25s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(7) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type7 5s steps(40, end);
  -webkit-animation-delay: 30s;
  animation-delay: 30s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(8) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type8 5s steps(40, end);
  -webkit-animation-delay: 35s;
  animation-delay: 35s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(9) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type9 5s steps(40, end);
  -webkit-animation-delay: 40s;
  animation-delay: 40s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(10) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type10 5s steps(40, end);
  -webkit-animation-delay: 45s;
  animation-delay: 45s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(11) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type11 5s steps(40, end);
  -webkit-animation-delay: 50s;
  animation-delay: 50s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(12) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type12 5s steps(40, end);
  -webkit-animation-delay: 55s;
  animation-delay: 55s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(13) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type13 5s steps(40, end);
  -webkit-animation-delay: 60s;
  animation-delay: 60s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(14) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type14 5s steps(40, end);
  -webkit-animation-delay: 65s;
  animation-delay: 65s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(15) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type15 5s steps(40, end);
  -webkit-animation-delay: 70s;
  animation-delay: 70s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(16) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type16 5s steps(40, end);
  -webkit-animation-delay: 75s;
  animation-delay: 75s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(17) {
  white-space: nowrap;
  overflow: hidden;
  opacity: 0;
  -webkit-animation: type 5s steps(40, end);
  animation: type17 5s steps(40, end);
  -webkit-animation-delay: 80s;
  animation-delay: 80s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
@keyframes type {
  from {
    width: 0;
  }
}

@-webkit-keyframes type {
  from {
    width: 0;
  }
}

span {
  animation: blink 1s infinite;
}

@keyframes type2 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type2 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@keyframes type3 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type3 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@keyframes type4 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type4 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type5 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type5 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type5 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type5 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type6 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type6 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type7 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type7 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type8 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type8 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type9 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type9 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type10 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type10 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type11 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type11 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type12 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type12 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type13 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type13 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type14 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type14 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type15 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type15 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type16 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type16 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes type17 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type17 {
  0% {
    width: 0;
  }
  from {
    opacity: 0;
  }
  1% {
    opacity: 1;
  }
  to {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
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

 
		
	</style>
</head>
<body>

	<div class="css-typing">
		
		<p >User:Anonymous$  hello... <br></p>
		<p >User:Anonymous$  i am looking for highly intelligent individual</p>
		<p>User:Anonymous$  to find him i have deviced this test... </p>
		<p>User:Anonymous$  Solving this through will lead  you to the path of finding me  	</p>


		<p>User:Anonymous$  Welcome to the Presidian.</p>
			
		<p>User:Anonymous$  Humans are a curious race.</p> 
		<p>User:Anonymous$  Vividly talented, extremely intelligent and enormously diverse.</p>
		<p>User:Anonymous$  Yet, they are humans,Just Humans!</p>
		
		<p>User:Anonymous$  Humans have a peculiar habit.</p>
		<p>User:Anonymous$  The habit of being different.</p>
		<p>User:Anonymous$  The habit of standing out from the rest.</p>

		<p>User:Anonymous$  Do you have what it takes to be the best?</p>
		<p>User:Anonymous$  To be “the one” among them all?</p>
		<p>User:Anonymous$  Can you outlive the Fall they all couldn’t?</p>
		<p>User:Anonymous$  We give you The Presidian!</p>

		<p>User:Anonymous$  Survive, and you shall serve for a noble cause.</p>
		<p>User:Anonymous$  Perish, and unite with dust, with them all. <span>|</span></p>
		
	
	</div>
<div class="site__container" style="margin-top: 2%;">
    <div class="grid__container">
      <form action="" method="post" autocomplete="off" class="form form--login">

        <div class="form__field">
          <input name="next" id="next" type="submit" value="START!!">
        </div>
      </form>
    </div>
  </div>

</body>
</html>