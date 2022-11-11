<?php
include '../controller/BuyerDatacontroller.php';
$f_name=$b_day=$rel="";


$fnameErr=$BdErr=$relerr="";
if (($_SERVER["REQUEST_METHOD"] == "POST"))
	 {

		if (empty($_POST["productname"]))
	{
			$fnameErr = "Product Name is required..";
	}
	 if (empty($_POST["expecteddate"]))
 {
		 $BdErr = "Expected Date is required";
 }
 if (empty($_POST["Area"]))
{
	 $relerr = "Area selection is required";
}


 if ($fnameErr==""&&$BdErr==""&&$relerr=="") {
 	// code...
	if (file_exists("../data/buydata.json")){
		$Product = $_POST['productname'];
		$Delivarytype= $_POST['delivary'];
		$Expected = $_POST['expecteddate'];
		$Area = $_POST['Area'];
		
		 $extra = array(  
                     'Productname'   =>     $Product,   
                     'Date'     =>        $Expected,  
                     'Area'        =>     $Area,  
                     'delivary'     =>     $Delivarytype

         ); 
        addData($extra);

		echo "Added to cart Successful";

	}
	else{ 
		echo "Server Error...";
	}
 }

 }   
 ?>
<!DOCTYPE html>
<html>
<head>
	 <?php
      require '../controller/Header.php';
    ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<meta charset="utf-8">
	<title>Buyer Entry Form</title>
</head>

<center><body>

<center><h1>Buy Product</h1></center><br><br>


	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<fieldset>
		   <center>
    <fieldset>
			 <center><legend><i><h2>Buying Information</h2></legend></i></center><br>

		Product Name:* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="productname" placeholder="Product Name" value="<?php echo $f_name;?>">
		<?php if ($fnameErr != "")
											 {
											 echo "*";
											 echo $fnameErr;
									 }
									 ?>

		<br><br>
    Delivary Type*:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

      <input type="radio"  name="delivary" class="delivary"  value="Fast" >Fast
      <input type="radio" name="delivary" class="delivary"  value="Normal" >Normal
			
      <br><br>
   Expected Date :*&nbsp&nbsp <input  type="date" name="expecteddate" value="<?php echo $b_day;?>">
	 <?php if ($BdErr != "")
											{
											echo "*";
											echo $BdErr;
									}
									?>
	 <br><br>
   Select Area:*	&nbsp	&nbsp	&nbsp&nbsp<select class="Area" name="Area" value="<?php echo $rel;?>">

                                 <option> Select Any </option>
                                 <option> Inside Dhaka </option>
																 <option>Outside of Dhaka</option>
                                 <option>Outside of Bangladesh</option>

                             </select>
														 <?php if ($relerr != "")
													 											{
													 											echo "*";
													 											echo $relerr;
													 									}
													 									?>

														 <br><br>
  </fieldset><br>

<center><input type="submit" class="btn btn-info" name="submit" style="width:200px;" value="Buy"><center>
</form><br><br>
</body>
</center>
<?php
include "../controller/Footer.php";
?>
