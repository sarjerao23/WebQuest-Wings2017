<?php
if(isset($_POST["loginr2"]))
{
	$username_player=$_POST["login__username"];
	$password_player=$_POST["login__password"];
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="wq";
	$counter= 0;
	$question;
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect_error);
		echo "<script>alert('Connection failed with the database!');</script>";
	}
	else
	{
		//echo "<script>alert('Connection Successfull');</script>"; 
	}
  $sql="select pass from players where uname='".$username_player."'";//fetching the password associated with the entered username
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
  	while($row=$result->fetch_assoc())
  	{
  		$counter++;
  		$check=$row["pass"];
  	}
    if($counter>1)//check for unique username
    {
      //echo "<script>alert('More than one user registered under the same username! Cannot login!');</script>";
    }
    else
    {
      if($check==$password_player)//check for correctness of the entered password
      {

      	session_start();
      	$_SESSION['user']=$username_player;     
      	$sql2="select currques from participants_round2 where uname='".$_SESSION['user']."'";
      	$sql1="select * from participants_round2 where uname = '".$_SESSION['user']."'";
      	$result1=$conn->query($sql1);
      	if($result1->num_rows>0)
      	{

      		$result2=$conn->query($sql2);
      		while($row=$result2->fetch_assoc())
      		{
      			$question=$row["currques"];
      		}
      		switch($question)
      		{         
      			case 1:
          header("location:hammerofthor.php");//question 1darker.php
          break;
          case 2:
          header("location:benzene.php");//question 2atlantis.php
          break;
          case 3:
          header("location:columbus.php");// question 3 enigma.php
          break;
          case 4:
          header("location:destined.php");//question 4 madder.php
          break;
          case 5:
          header("location:revelations.php");//question 5 origin.php
          break;
          /*case 6:
          header("location:closer.php");// ques6 closser.php
          break;
          case 7:
          header("location:endrone.php");//endrone.php
          break;*/
          default:
          //echo"<alert>script('error');</alert>";       
          header("location:preludetwo.php");
          }//end of switch
        } //end if no of rows>0   
        else
        {
          //echo "<script>window.location('preludeone.php');</script>"; //preludeone.php
        	header("location:preludetwo.php");        
        }
      }//end of password verification
      else
      	echo "<script>alert('Incorrect Password!');</script>";
      }//
    }//single user login
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">	
	<link href="https://fonts.googleapis.com/css?family=Almendra" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<style >
	body{
		background: url("images/login1.jpg") center center fixed;
		-webkit-background-size:cover;
		font-family: 'Almendra',sans-serif;
	}
	.button{

		padding: 10px;


		background-color: rgba(192,192,192,0.7);
		font-size:25px;
		color:white;
		border:2px solid grey;
		border-radius:25px;
		width:25%;

		text-align: center;
		margin-left:32%;


	}
	.button:hover{
		background-color: rgba(192,192,192,0.2);
	}


	input[type="text"],input[type="password"]{

		width:40%;
		border:1px solid grey;
		border-radius:15px 50px;

		height:50px;
		text-align: center;
		font-size:25px;
		margin-left: 25%;
		opacity: 0.65;

	}
	label{
		color:rgba(255,255,255,0.75);
		margin-left: 25%;
		font-size:25px;
	}
	.container{
		padding-top: 15%;
	}
	h3{
		font-size:65px;
		color:white;
		opacity:0.75;
		padding-bottom: 20px; 
		margin-left: 26%;

	}

</style>
</head>
<body>


	<div class="container">
		<div class="row main">
			<h3><b>WEB-QUEST 4.0</b></h3>
		</div>
		<form action="" method="POST">
		<div class="form-group ">
			<label for="username">Username:</label>
			<input type="text" class="form-control" id="login__username" name="login__username">
		</div>
		<div class="form-group">
			
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="login__password" name="login__password" required>
			</div><br>
			<div>
				<input type="submit" name="loginr2" id="loginr2" class="btn btn-lg center-block button" value="Login" required="">
			</div>
		</form>
	</div>


</body>
</html>