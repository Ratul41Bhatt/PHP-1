<?php  
include '../model/Model3.php';

function loadData(){
return readData();

}
function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../data/Allproductdata.json', $final_data))  
        {  
           
        }  

}
function studentInfo($data){

    $all_data = readData();
    foreach($all_data as $row)  {
        if ($row['name']==$data) {
                $d_data = array(
                'name' => $row['name'],
                'ProductPrice' => $row['ProductPrice'],
                'ProductID' => $row['ProductID']
                
            );
        return $d_data;
        }
    }

}

?>