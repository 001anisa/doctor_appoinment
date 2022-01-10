<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-list</title>
    <!-- <link rel="stylesheet" href="patient.css" type="text/css">-->
    <?php include("patient_css.php"); ?> 


    
    
    
</head>
<body>
    <h1>Doctor-schedule-list</h1>
    <table id="patient">
        <tr>
            <td>ID</td>
            <td>NAME </td>
            <td>TIME</td>                
            <td>DATE</td>
            <td>STATUS</td> 
            <td>UPDATE</td>
            <td>DELETE</td>
        </tr>

<?php
    // database connection
include ("connection.php");

    $stmt = mysqli_query($conn,"select * from doctor_schedule ;");
    while($doctor_schedule = mysqli_fetch_array($stmt))
    {
        ?>
        <tr>
            <td><?php echo $doctor_schedule['id'];?></td>
            <td><?php echo $doctor_schedule['name'];?></td>
            <td><?php echo $doctor_schedule['time'];?></td>
            <td><?php echo $doctor_schedule['date'];?></td>
            <td><?php echo $doctor_schedule['status'];?></td>
            <td> <a href="doctor_edit.php?id=<?php echo $doctor_schedule['id'];?>">Edit</a> </td>
            <td> <a href="doctor_delete_query.php?id=<?php echo $doctor_schedule['id'];?>">Delete</a> </td>
        </tr>
        <?php
    }
    ?>
    <?php
?>
    </table>
    <?php
    $stmt->close();
    $conn->close();
    ?>
</body>
</html>