
<!DOCTYPE html>
<html>
<head>
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
      $sql3="insert into participants_round2(uname,currques,logintime,inittime) values ('".$_SESSION['user']."',1,CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP()) ";
      $result1=$conn->query($sql3);
      if($result1)
      {
        header('location:hammerofthor.php');// darker.php
      }
      else
      {
      echo "<script>alert('error');</script>";        
      }
    }
  }

  ?>

	<title>prelude</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Almendra" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<style>

	body{
		background:url("images/bg0.jpg") center center fixed;
		background-size: cover; 
		font-family: 'Almendra',serif;
		overflow-x: hidden;


	}

	.form--login input[type="submit"] {
		cursor: pointer;
	}

	.button{
		padding: 10px;


		background-color: rgba(192,192,192,0.7);
		font-size:20px;
		color:white;
		border:2px solid grey;
		border-radius:25px;
		width:40%;
	}
	.button:hover{
		background-color: rgba(192,192,192,0.2);
	}


	input[type="text"]{
		width:100%;
		border:1px solid grey;
		border-radius:15px 50px;
		height:50px;
		text-align: center;
		font-size:25px;
		opacity:0.5;

	}
	.content{
		font-size:25px;
		color:black;
	}
	.row{
		text-align: center;
	}
</style>
</head>
<body>

	<div class="row">
		
	</div>
	<br>

	<div class="row">
<div class="col-xs-8 col-xs-offset-2 mx-auto content">
							<h3><b>
								                <center>Year: 10950 BC
								                	<br>
				Event: The comet strike of gobekli tepe.<br></center>
				  An event that changed the course of entire humanity setting off an cooling event of Earth which lasted for about more than 1000 years.<br><br>
				  
				<center>Year: Near to 9360 BC<br>
				Event: The doom of Atlantis.<br></center>
				  There occured voilent earthquakes and floods; and in a single day and night of misfortune all your warlike men in a body sank into the earth.<br><br>


				<center>
				Year: 1600 BC<br>
				Event: The eruption of mount theta<br></center>
				  The world map wouldnt be as it's now, if the greek volcano hadnt been exploded 3500 years ago.<br><br>
				  	<center>
				Year: 856 AD<br>
				Event: The earthquake of Damghan, Iran.<br></center>
				  A gigantic earthquake with a capacity of 1 gigaton power struck ancient Iran killing more than 200,000 people in a single blow.<br><br>

				  <center>
				Year: ???<br>
				Event: ???<br></center>
				<br>

				  And another sign appeared in heaven: behold, a great red dragon,
				  with seven heads and ten horns, and on his heads seven diadems. 
				  His tail swept down a third of the stars of heaven and cast them to the earth. 
				  And the dragon stood before the woman who was about to give birth, so that when she bore her child he might devour it. 
			</b></h3>
		</div>
		
	</div><br>

	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 mx-auto"> 
			<form action="" method="POST">
				<input name="next" id="next" type="submit" value="next" class="button center-block mx-auto">

			</form>
		</div>
	</div>


</body>
</html>