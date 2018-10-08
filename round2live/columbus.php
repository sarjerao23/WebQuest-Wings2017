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
    $answer=str_replace(" ","",strtolower($_POST["answer"]));
        //$answer = str_replace(" ", "",strtolower($_POST['answer']));
    $sql="select answer from answers_round2 where id=3";
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
          header('location:kingslayer.php');
         
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
	<title>columbus</title>
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
    color: black;
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
		text-align: center;
	}
	img{
		height:40%;
	}
	a{
  color:rgb(216,187,148);
  background-color:rgba(76,76,76,0.13);
  font-size: 20px;

}
a:hover{
  color:rgba(255,255,255,0.5);

}
.row{
	text-align: center;
	align-content: center;
}
</style>
</head>
<body>



	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 mx-auto content">
			
             <h1 style="font-size: 42px;"><b>UPHOLD</b></h1>
              <h3>Now you hold the <b>PALLADIUM</b>
              </h3>		
		</div>
	</div>
	<br>


          
    <div class="row">
      		<div class="col-lg-2  col-lg-offset-5 mx-auto" >
        		<a href="#home" data-toogle="tooltip" title="24">Here</a>
        	</div>
        </div>
        <br>
		<div class="row">
        	<div class="col-lg-2">
        		<a href="#home">Here</a>
        	</div>
          <div class="col-lg-8" style="text-align:center;">
            <h3><b>Even though humans have studied the heavens for thousands of years,<br>
              we still know very little about many objects and processes in the lordly world.<br>
              As we continue to explore,<br> the divine bodies, about the stars, planets, and galaxies.<br>
              Some of the things we find out are amazing,<br> and others are confusing. 
</b></h3>
          </div>
          <div class="col-lg-2" >
        		<a href="#home" data-toogle="tooltip1" title="32" >Here</a>
        	</div>
        </div>

        <div class="row">
      		<div class="col-lg-2 col-lg-offset-5 mx-auto" style="padding-top: 20px">
        		<a href="#home" >Here</a>
        	</div>
        </div>

	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 mx-auto"> 
			<form action="" method="POST">
				<input name="answer" id="answer" type="text" placeholder="???"><br><br>
				<input name="next" id="next" type="submit" value="Answer" class="button center-block mx-auto">

			</form>
		</div>
	</div>

<!--
<script>
      $(document).ready(function(){
        $('[data-toogle="tooltip"]').tooltip();

      });


      $(document).ready(function(){
        $('[data-toogle="tooltip1"]').tooltip();

      });
      
    </script>-->
</body>
</html>