<?php
//Include database configuration file
include('dbConfig.php');


//brands
if(isset($_POST["device_id"]) && !empty($_POST["device_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM brands WHERE device_id= ".$_POST['device_id']);
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select brand</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['device_id'].'">'.$row['brand_name'].'</option>';
        }
    }else{
        echo '<option value="">Brand not available</option>';
    }
}

//code
if(isset($_POST["brands_id"]) && !empty($_POST["brands_id"])){
    //Get all city data
    $query = $db->query("SELECT * FROM brands WHERE brands.id=brand_name ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select Codes</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['brand_name'].'">'.$row['code'].'</option>';
        }
    }else{
        echo '<option value="">Code not available</option>';
    }
}
?>