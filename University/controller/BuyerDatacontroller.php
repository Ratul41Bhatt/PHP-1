<?php  
include '../model/Model4.php';

function loadData(){
return readData();

}
function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../data/buydata.json', $final_data))  
        {  
           
        }  

}
function studentInfo($data){

$all_data = readData();
    foreach($all_data as $row)  {
        if ($row['name']==$data) {
            $d_data = array(
                'Productname' => $row['Productname'],
                'Date' => $row['Date'],
                'delivary' => $row['delivary'],
                'Area' => $row['Area']
            );
        return $d_data;
        }
    }

}

?>