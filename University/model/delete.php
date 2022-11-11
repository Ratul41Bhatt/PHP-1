<?php
//delete.php
$connect = mysqli_connect("localhost", "root", "", "gracious_giver");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM program WHERE program_id = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>
