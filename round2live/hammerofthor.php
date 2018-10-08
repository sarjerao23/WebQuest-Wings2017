<?php
/*$servername="localhost";
$username="root";
$password="";
$dbname="wq";*/
$servername="localhost";
  $username="wqAdmin";
  $password="webQuest@4";
  $dbname="webquest";

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
    $answer=str_replace(" ","",strtolower($_POST["answer"]));
        //$answer = str_replace(" ", "",strtolower($_POST['answer']));
    $sql="select answer from answers_round2 where id=1";
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
      //$sql="update participants_round1 set currques=2 where user='".$_SESSION['user']."'";
      //$sql="update participants_round2 set currques=2, logintime = CURRENT_TIMESTAMP() where uname = '".$_SESSION['user']."'";
                
      //$result=$conn->query($sql);
      //if($result)
      //{   //echo "<script>alert('Right answer');</script>";  
          header('location:elpatron.php');
         
      //}
     
    }            
    else
    {
      echo "<script>alert('Wrong Answer! Try Again!');</script>";
    }
  }
}  
?>

<!DOCTYPE html>
<html>
<head>
	<title>hammerofthor</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
 
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Almendra" rel="stylesheet">

	<style>

	body{
		background:url("images/bg1.jpg") center center fixed;
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
		width:60%;
		border:1px solid grey;
		border-radius:15px 50px;
		height:50px;
		text-align: center;
		font-size:25px;
		opacity:0.5;
		color: black;

	}
	.content{
		font-size:25px;
		color:black;
	}
</style>
</head>
<body>

	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 mx-auto content" style="text-align: center;">
							<h3><b>
								        With the prophecy, comes a ritual.<br>
A process that involves the unification<br>
of some extremely powerful and mystical entities,<br>
the Quest of which you shall lead now,<br>
to fulfill the aim of the Presidian.<br>
Should these figments be united by a single being,<br>
Shall set in motion a set of extensive events,<br>
that will give him immense power to intercept the paramount danger,<br>
and beat the Supreme Deity.<br>
The Journey however, to summon these figments,<br>
is challenging and dangerous.<br>

			</b></h3>
		</div>
		
	<br>

	<div class="row">
        	
          <div class="col-lg-8 col-lg-offset-2 mx-auto ">
            <img class="img-responsive center-block" src="images/q1.jpg" width="304" height="236">
            </div>
          
        </div><br>

	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 mx-auto"> 
			<form action="" method="POST">
				<input name="answer" id="answer" type="text" class="center center-block"><br><br>
				<input name="next" id="next" type="submit" value="Answer" class="button center-block mx-auto">

			</form>
		</div>
	</div>


</body>
</html>