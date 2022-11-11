<?php
    require '../controller/Header.php';
  ?>
<?php

	if(isset($_SESSION['username']))
	{
			$current = file_get_contents("../data/buyerdata.json");
			$current = json_decode($current, true);
			foreach($current as $key=>$value){
					if($value['User']===$_SESSION["username"])
					{
					$F_Name =$value['Firstname'];
				    $L_Name=$value['Lastname'];
					$gender=$value['Gender'];
					$u_birthday=$value['Birthday'];
					$Religion =$value['Religion'];
					$Phone =$value['Phone'];
					$Email_Address =$value['Email'];
					$Web_Link =$value['Link'];
					$Present_Address =$value['Present'];
					$Permanent_Address=$value['Permanent'];
					break;
					}
			}


	}

?>
<?php

if (($_SERVER["REQUEST_METHOD"] == "POST") & count($_REQUEST) >0){
	if (file_exists("../data/buyerdata.json")){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$u_address = $_POST['Address'];
		$Phone = $_POST['Phone'];
		$u_link = $_POST['urlink'];
		$mail = $_POST['mail'];


		$data = file_get_contents("../data/buyerdata.json");
		$data = json_decode($data, true);
 if (!empty($data))
 {
	foreach ($data as $key => $row){
		 if ($row["User"] == $_SESSION["username"]){
			 $data[$key]['Firstname'] = $firstname;
			 $data[$key]['Lastname'] = $lastname;
             $data[$key]['Phone'] = $Phone;
			 $data[$key]['Email'] = $mail;
			 $data[$key]['Link'] = $u_link;
			 $data[$key]['Present'] = $u_address;
			file_put_contents('../data/buyerdata.json', json_encode($data));
          echo "Successful";
			header("Location:Profile.php");
		 break;
		 }
	}
}
else{
		echo "Server Error...";
	}
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Profile</title>
</head>

<body>
	<br>
	<center> <h2>Edit Profile</h2></center>
	<br>
	<hr>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<br>
		<fieldset>
			<br>
		 User Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['username'];?><br><br>
     First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="firstname" placeholder="FirstName" value="<?php echo $F_Name;?>">

			<br><br>

			Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="lastname" placeholder="Lastname"value="<?php echo $L_Name;?>">

 		<br><br>
		Phone Number:&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp<input type="tel" name="Phone" placeholder="Phone Number"value="<?php echo $Phone;?>">

		<br><br>

		Email:&nbsp&nbsp	&nbsp &nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp	&nbsp&nbsp	&nbsp&nbsp	&nbsp<input  type="email" name="mail"  placeholder="Email"value="<?php echo $Email_Address;?>" >
	<br><br>
    Personal URL:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="urlink" placeholder="Personal Link" value="<?php echo $Web_Link;?>" >

								 	<br><br>
	Present Address: &nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class="Address" name="Address" placeholder="Present Address" value="<?php echo $Present_Address;?>">
									<br><br>
		</fieldset>
		<p align="right"> <input type="submit" name="Save" value="Update" style="width: 10%;"></P>
	</form>
</body>
<?php
include "../controller/Footer.php";
?>
</html>
