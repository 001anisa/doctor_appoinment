<?php

include ("connection.php");
include ("patient_css.php");    
     $id = $_REQUEST['id'];
     $stmt = mysqli_query($conn,"delete from doctor_schedule where id='$id';");
    include ("doctor_schedule_list.php");
    
 ?>

