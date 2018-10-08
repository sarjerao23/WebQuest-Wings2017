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
    {
    	//echo "form";
    
     session_start();
      $sql3="update participants_round2 set currques=2, logintime = CURRENT_TIMESTAMP() where uname = '".$_SESSION['user']."'";
      $result1=$conn->query($sql3);
      if($result1)
      {
        header('location:benzene.php');// darker.php
      }
      else
      {
      echo "<script>alert('error');</script>";        
      }
    }
  }

  ?>

<!DOCTYPE html>
<html>
<head>
	<title>elpatron</title>
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
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
 
</head>
<body>

	<center>
		<div style="padding-top: 15%;">
			<h3 style="text-align:center; color: black; font-size: 36px;">
				"And I looked, and behold, a white horse! <br>And its rider had a bow, and a crown was given to him, <br>and he came out conquering, <br>and to <b>conquer</b>."<br><br>
			</h3>
		</div>	
		<div>
			<form action="" method="POST">
				<center>
					<input type="submit" name="next" id="next" class="next" value="Next">
				</center>
			</form>
		</div>
	</center> 

</p>
</body>
</html>