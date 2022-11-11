<?php  
include '../model/Model.php';

function loadData(){
return readData();

}
function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../data/buyerdata.json', $final_data))  
        {  
            header("location:../view/Buyer_Login.php");
        }  

}
function studentInfo($data){

$all_data = readData();
    foreach($all_data as $row)  {
        if ($row['name']==$data) {
            $d_data = array(
                'name' => $row['name'],
                'e-mail' => $row['e-mail'],
                'username' => $row['username'],
                'gender' => $row['gender'],
                'dob' => $row['dob'],
            );
        return $d_data;
        }
    }

}

?>