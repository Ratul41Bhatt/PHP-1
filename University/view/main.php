<!DOCTYPE html>
<html>
<head>

	<title>Gracious Giver login and signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
body{
  margin: 0;
  height: 100vh;
  width:100vw;
  overflow: hidden;
 font-family: 'Caveat', cursive;
 font-weight: 700;
 display: flex;
 align-items: center;
 justify-content: center;
 color: #555;
 background-color: #ecf0f3;

}

	.logo{

	  background: url(View/images/r3.gif);
	  width: 200px;
	  height: 200px;
	  border-radius: 50%;
	  margin : 0 auto;
	  box-shadow: 0px 0px 2px #5f5f5f, 0px 0px 0px 5px #ecf0f3,8px 8px 15px #a7aaaf,-8px -8px 15px #fff;

	}
	.main-div{
	  width: 70%;
	  height:90%;
	  padding: 60px 35px 35px 35px;
	  border-radius: 40px;
	  background-color: #ecf0f3;
	  box-shadow: 13px 13px 20px #cbced1,
	  -13px -13px 20px #fff;
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 37%;
		transform: translate(-50%, -50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 27%;
		transform: translate(-50%, -50%);
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color: #187FAB;
	}

</style>
<body>
<div class="main-div">


	<div class="logo">

	</div>
	<br><br>
	<div class="row">
		<div class="col-sm-6" style="left:4%;">
			<img src="View/images/gg2.gif" class="img-rounded" title="Gracious Giver" width="400px" height="350px">
			<div id="centered1" class="centered"><h3 style="color: #04ACFF;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow Your Heart.</strong></h3></div>
			<div id="centered2" class="centered"><h3 style="color:#04ACFF ;"><span class="glyphicon glyphicon-user"></span>&nbsp&nbsp<strong>Help People Save Humanity.</strong></h3></div>
			<div id="centered3" class="centered"><h3 style="color:#04ACFF;"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbsp<strong>Join.</strong></h3></div>
		</div>
		<div class="col-sm-6" style="left:8%:">
			<h2><strong>Realise sufferings of poors <br> donate for saving the humanity</strong></h2><br><br>
			<h4><strong>Join Gracious Giver Today.</strong></h4>
			<form method="post" action="">
				
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('./View/signin.php','_self')</script>";
					}
				?>
			</form>
		</div>
	</div>
	</div>
</body>
</html>
