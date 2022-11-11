<?php
include("../Model/connection.php");
include("../Controller/functions.php");
?>
	<style>
	body {
  color: white;
}
	nav.navbar-default {

	  top: 0;
	  background-color: #64FFF1;
	  padding: 40px;
	  font-size: 20px;
		color: white;
		border-radius: 30px;
	}
	.logo{
  background: url(../images/r.gif);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin : 0 auto;
  box-shadow: 0px 0px 2px #5f5f5f, 0px 0px 0px 5px #ecf0f3,8px 8px 15px #a7aaaf,-8px -8px 15px #fff;

}
	</style>
	<body>
		<nav class="navbar navbar-default">
			<div id="re"class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">Gracious Giver</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
		<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from admin where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);

		$user_id = $row['user_id'];
		$user_name = $row['user_name'];
		$first_name = $row['f_name'];
		$last_name = $row['l_name'];
		$Relationship_status = $row['Relationship'];
		$user_pass = $row['user_pass'];
		$user_email = $row['user_email'];
		$user_country = $row['user_counrey'];
		$user_gender = $row['user_gender'];
		$user_birthday = $row['user_birthday'];
		$user_image = $row['user_image'];
		$user_cover = $row['user_cover'];
		$recovery_account = $row['recovery_account'];
		$register_date = $row['user_reg_date'];

		?>    <li>	<div class="logo"></div></li>
		      <li><a href='profile.php?<?php echo "u_id=$user_id" ?>'><?php echo "$first_name"; ?></a></li>
			    <li><a href="Home.php">Home</a></li>
					<li><a href="add_admin.php">Add Admin</a></li>
					<li><a href="user.php">Manage User</a></li>
					<li><a href="manage_program.php?u_id=new">Programs</a></li>
					<?php
							echo"

							<li class='dropdown'>
								<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span><i class='glyphicon glyphicon-chevron-down'></i></span></a>
								<ul class='dropdown-menu'>
									<li>
										<a href='edit.php?u_id=$user_id'>Edit Account</a>
									</li>
									<li role='separator' class='divider'></li>
									<li>
										<a href='Donate.php'>Donate</a>
									</li>
									<li role='separator' class='divider'></li>
									<li>
										<a href='logout.php'>Logout</a>
									</li>
								</ul>
							</li>
							";
						?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<form class="navbar-form navbar-left" method="get" action="results.php">
							<div class="form-group">

							</div>
							<button type="submit" style="width:300px;color:black;background-color:white;" class="btn btn-info" name="search">Search</button>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>
