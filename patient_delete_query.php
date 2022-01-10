<?php

include ("connection.php");
// include ("patient.php");    
     $id = $_REQUEST['id'];
     $stmt = mysqli_query($conn,"delete from patient where id='$id';");
    include ("Patient_list.php");
    
 ?>

