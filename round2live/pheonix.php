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
  echo "<script>alert('Connection failed with the Database!');</script>";
}
else
{
  echo "<script>alert('Connection established');</script>";
    //session_start();
    //echo $_SESSION['user'];

  if(isset($_POST["next"]))
  {
    //$answer=strtolower($_POST["answer"]);
        //$answer = str_replace(" ", "",strtolower($_POST['answer']));
    //$sql="select answer from answers_round1 where id=1";
    //$result=$conn->query($sql);
     // if($result->num_rows>0)
      //{
       // while($row=$result->fetch_assoc())
         // {
          //$check=$row["answer"];
          //}
      
    //if($check==$answer)
    
      session_start();
      //$sql="update participants_round1 set currques=2 where user='".$_SESSION['user']."'";
      $sql="update participants_round2 set currques=3, logintime = CURRENT_TIMESTAMP() where uname = '".$_SESSION['user']."'";
                
      $result=$conn->query($sql);
      if($result)
      {   //echo "<script>alert('Right answer');</script>";  
          header('location:columbus.php');
         
      }
     
    }            
    
  }
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>pheonix</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Almendra">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>

	<style type="text/css">
		body{
			font-family: 'Almendra', serif;
			background-color: transparent;

		}
		
		html{
			background: url("images/versen.jpeg") no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			width: 100%;
			height: 100%;	
			background-repeat: no-repeat;
			margin: 0 auto;	
		}
		.next{
			padding: 10px;
			background-color: black;
			font-size: 20px;
			color: white;
			border: 2px solid white;
			border-radius: 50px 15px;
			width: 10%;
		}

		.next:hover{
			background-color: #3f3e3e;
		}

		input[type="submit"]{
			width: 10%;
			border: 2px solid white;
			border-radius: 15px 50px;
			height: 50px;
			text-align: center;
			font-size: 25px;
			font-weight: bold;

		}
	</style>
</head>
<body>

	<center>
		<div style="padding-top: 15%;">
			<h3 style="text-align:center; color: black; font-size: 36px;">
				"And out came another horse, bright red. <br>Its rider was permitted to take <b>peace</b> from the earth, <br>so that people should <b>slay</b> one another, <br>and he was given a great sword." <br><br>	
			</h3>
		</div>	
		<div>
			<form method="POST" action="">
				<center>
					<input type="submit" name="next" id="next" class="next" value="Next">
				</center>
			</form>
		</div>
	</center> 

</p>
</body>
</html>