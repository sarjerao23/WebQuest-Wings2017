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
	echo "<script>alert('Just one more to go');</script>";
    //session_start();
    //echo $_SESSION['user'];

	if(isset($_POST["next"]))
	{
		$answer=strtolower($_POST["answer"]);
        //$answer = str_replace(" ", "",strtolower($_POST['answer']));
		$sql="select answer from answers_round2 where id=4";
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
     // $sql="update participants_round2 set currques=2, logintime = CURRENT_TIMESTAMP() where uname = '".$_SESSION['user']."'";

      //$result=$conn->query($sql);
      //if($result)
      //{   //echo "<script>alert('Right answer');</script>";  
			header('location:felina.php');

      //}

		}            
		else
		{
			echo "<script>alert('Wrong Answer! Try Again!');</script>";
		}
	}
}  
?>

<!DOCTYPE html><html><head><title>Destined</title><link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <script src="https://code.jquery.com/jquery-3.1.1.js"></script><link href="https://fonts.googleapis.com/css?family=Almendra" rel="stylesheet"><style >html,body{font-family: 'Almendra',serif;font-size:30px;color: black;height: 100%;background: url("images/bg2.jpg") no-repeat center center fixed ;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;line-height: 100%;}.container-fluid{height: 100%;overflow: hidden;}.main{padding:5%;padding-top: 35%;padding-left:10%;height:100%;color: black;}input[type="text"]{width:60%;color: black;border:1px solid grey;border-radius:15px 50px;opacity:0.5;height:50px;text-align: center;font-size:25px;text-indent: 5px;}.image{padding-top: 20%;padding-right:12%;}img{width:300px;height:350px;}.left{margin-bottom:-9999px;padding-bottom: 9999px;}.row .left{height:100%;}.button{padding: 10px;font-family:'Almendra',serif;background-color: rgba(192,192,192,0.7);font-size:25px;color:black;border:2px solid grey;border-radius:25px;width:30%;}.button:hover{background-color: rgba(192,192,192,0.2);}#fshow{display: none;padding-top: 55%;}</style>}</head><body><div class="container-fluid"><div class="row " ><div class="col-md-3 image content2"><img class="img-rounded center-block" id="hiddenimageleft" ></div><div class="col-md-6 left " ><div class="row" id="fhide"><div class="row center-block main mx-auto">"NESCITIS QVA HORA DOMINVS VENIET" </div><div class="row center-block content"><input type="text" class=" center-block mx-auto" id="answer1" name="Answer" placeholder="Answer"><br></div><div class="row content "> <button class=" button btn btn-success btn-lg center-block mx-auto" onclick="showdivimage()">Submit</button></div></div><div class="row" id="fshow"><form action="" method="POST" autocomplete="off"><div class="row center-block content"><input type="text" class=" center-block mx-auto" id="answer" name="answer" placeholder=" Final Answer"><br></div><div class="row content "> <input type="submit" name="next" id="next" class=" button btn btn-success btn-lg center-block mx-auto"></div></form></div></div><div class="col-md-3 col-md-offset-6 image content2" ><img class="img-rounded center-block" id="hiddenimageright" ></div></div></div></body><script >function showdivimage(){var x=document.getElementById("hiddenimageleft");var X=document.getElementById("hiddenimageright");var y=document.getElementById("answer1");var a=document.getElementById("fhide");var b=document.getElementById("fshow");if(y.value==="death"||y.value==="Death"||y.value==="DEATH"){x.src="images/q4l.jpg";X.src="images/q4r.jpg";a.style.display="none";b.style.display="block";}else if(y.value===""){alert("Enter the answer you moron!");}else{alert("Try Harder,You are almost there");}};</script></html>