<?php

$student_id = $_POST["id"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];

$conn = mysqli_connect("localhost","root","","gracious_giver") or die("Connection Failed");

$sql = "UPDATE user SET f_name = '{$firstName}',l_name = '{$lastName}' WHERE user_id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
