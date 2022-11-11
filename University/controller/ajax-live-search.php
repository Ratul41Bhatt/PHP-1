<?php

$search_value = $_POST["search"];

$conn = mysqli_connect("localhost","root","","gracious_giver") or die("Connection Failed");

$sql = "SELECT * FROM user WHERE f_name LIKE '%{$search_value}%' OR l_name LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Name</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["user_id"]}</td><td>{$row["f_name"]} {$row["l_name"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["user_id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["user_id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
