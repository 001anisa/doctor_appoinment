<?php 
    
    $conn = new mysqli('localhost','root','','doctor_appoinment');
    if($conn->connect_error)
    { 
        die('Connection Failed : '.$conn->connect_error);
   
    }
?>
    