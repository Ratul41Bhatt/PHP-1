<?php
session_start();

include("../Model/connection.php");

	if (isset($_POST['login'])) {

		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
    if(!empty($email)&& !empty($pass))
		{
			$select_user = "select * from user where user_email='$email' AND user_pass='$pass'";
			$query= mysqli_query($con, $select_user);
			$check_user = mysqli_num_rows($query);

			if($check_user == 1){

				$isset=true;

			if($isset){
				      $_SESSION['user_email'] = $email;
						 setcookie("user_email",$email, time()+ 3600);
						 echo "<script>window.open('Home.php', '_self')</script>";
					 }

			}
			else{
				echo"<script>alert('Your Email or Password is incorrect')</script>";
			}
		}
		else{
			echo"<script>alert('Please fillup all the fields')</script>";
		}

	}
?>