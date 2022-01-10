<?php

include ("connection.php");
include ("patient_css.php");


     $name = $_REQUEST['name'];
     $age= $_REQUEST['age'];
  
     $id = $_REQUEST['id'];
     $stmt = mysqli_query($conn,"update patient set name=' ".$name."',age=' ".$age."' where id=' ".$id."';");
    include ("Patient_list.php");
 ?>