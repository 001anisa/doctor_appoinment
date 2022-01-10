<?php

include ("connection.php");
include ("patient_css.php");

     $name = $_REQUEST['name'];
     $time = $_REQUEST['time'];
     $date = $_REQUEST['date'];
     $status = $_REQUEST['status'];

     $id = $_REQUEST['id'];
     $stmt = mysqli_query($conn,"update doctor_schedule set name=' ".$name."',time=' ".$time."' date=' ".$date."' status=' ".$status."' where id=' ".$id."';");
    include ("doctor_schedule_list.php");
 ?>