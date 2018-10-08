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
    $answer=strtolower($_POST["answer"]);
        //$answer = str_replace(" ", "",strtolower($_POST['answer']));
    $sql="select answer from answers_round2 where id=2";
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
      //$sql="update participants_round2 set currques=3, logintime = CURRENT_TIMESTAMP() where uname = '".$_SESSION['user']."'";
                
      //$result=$conn->query($sql);
      //if($result)
      //{   //echo "<script>alert('Right answer');</script>";  
          header('location:pheonix.php');
         
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
	<title>benzene</title>
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
		color: black;
		border-radius:15px 50px;
		height:50px;
		text-align: center;
		font-size:25px;
		opacity:0.5;

	}
	.content{
		font-size:25px;
		color:black;
		text-align: center;
	}
	img{
		height:40%;
	}
</style>
</head>
<body>


	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 mx-auto content">
			
             <h1 style="font-size: 36px;"><b>GEAR UP</b></h1>
              <h3>Now you hold the <b>SPEAR OF DESTINY</b>
              </h3>		
		</div>
	</div>
	<br>

	<div class="row">
        	
          <div class="col-lg-8 col-lg-offset-2 mx-auto ">
            <img class="img-responsive center-block" src="images/q2.jpg" >
            </div>
          
        </div><br>
        <br><br><br>

	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 mx-auto"> 
			<form action="" method="POST">
				<input name="answer" id="answer" class="center-block" type="text" placeholder="???"><br><br>
				<input name="next" id="next" type="submit" value="Answer" class="button center-block mx-auto">

			</form>
		</div>
	</div>


</body>
</html>