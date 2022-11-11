


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrasion Form</title>
	<link rel="stylesheet" href="login.css">
	<script src="js/login.js"></script>
	<script src="js/Registration_Validation.js"></script>
</head>

<body>

	<div class="wrapper">
		<div class="container">
			<h1>Registrasion Form</h1>
			<?php
			if (empty($errors)) {
				
			}
			else {
				foreach ($errors as $message) {
					echo "<div class='error'>";
					echo $message;
					echo '</div>';
				}
			}

			if(empty($success)){
				
			}
			else {
				foreach ($success as $message) {
					echo "<div class='succ'>";
					echo $message;
					echo '</div>';
				}
			}

			?>

			<form class="form" id="RegForm" name="RegForm" method="POST" action="" onsubmit="return valide()">
				<label for="username">Username : </label>
				<input id="username" class="username" name="username" type="text" placeholder="User Name" autocomplete="off" <?php echo $username; ?>/>
				<label for="password ">Password : </label>
				<input id="password" class="password" name=" password" type="password" placeholder="Password" <?php echo $password; ?> />
				<small></small>
				<label for="confirmpassword">Confirm Password : </label>
				<input id="confirmpassword" class="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm Password" <?php echo $confirmpassword; ?> />
				<small></small>
				<label for="name">University Name : </label>
				<input id="name" class=" name" name=" name" type="text" placeholder=" Name" <?php echo $name; ?> />
				<label for=" ownername">Owner Name : </label>
				<input id="ownername" class="ownername" name="ownername" type="text" placeholder=" Owner Name" <?php echo $ownername; ?> />
				<label for="presentaddress">Present Address : </label>
				<input id="presentaddress" class="presentaddress" name="presentaddress" type="text" placeholder="Present Address" <?php echo $presentaddress; ?> />
				<label for="permanentaddress">Permanent Address : </label>
				<input id="permanentaddress" class="permanentaddress" name="permanentaddress" type="text" placeholder="Permanent Address" <?php echo $permanentaddress; ?> />
				<label for="emailaddress">Email Address : </label>
				<input id="emailaddress" class="emailaddress" name="emailaddress" type="email" placeholder="Email Address" <?php echo $emailaddress; ?> />
				<small></small>
				<label for=" weblink"> Web Link : </label>
				<input id=" weblink" class="weblink" name=" weblink" type="link"  placeholder=" Web Link" <?php echo $weblink; ?> />
				<label for="typeof">Type Of University : </label>
				<select class="typeof" name="typeof" <?php echo $typeof; ?> >

					<option>Engineering</option>
					<option>Commerce</option>
					<option>Vocational</option>
					

				</select>

				<!-- <label for="image">Profile image: </label>
				<input id="image" class="image" name="image" type="file" <?php echo $image; ?> /> -->

				<button type="submit" value="account">Created An Account</button>
				<button type="submit" class="reset" value="reset">Reset</button>

				<p> Already have an account? <a href="Login_Page.php">Login!</a></P>
			</form>
		</div>

	</div>
</body>

</html>