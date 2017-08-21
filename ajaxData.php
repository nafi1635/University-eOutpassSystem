<?php
//Include database configuration file
include('dbConfig1.php');
if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
    //Get all state data
    echo $_POST['countru_id'];
    $query = $db->query("SELECT * FROM admins WHERE did = ".$_POST['country_id']." ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select administrator</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
        }
    }else{
        echo '<option value="">Administrators not available</option>';
    }
}
