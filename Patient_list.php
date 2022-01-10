<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient-list</title>
    <!-- <link rel="stylesheet" href="patient.css" type="text/css">-->
    <?php include("patient_css.php"); ?> 


    
    
    
</head>
<body>
    <h1>Patient-list</h1>
    <table id="patient">
        <tr>
            <td>ID</td>
            <td>NAME </td>
            <td>AGE</td>                
            <td>GENDER</td>
            <td>PHONE</td> 
            <td>DATE</td>
            <td>TIME</td>
            <td>UPDATE</td>
            <td>DELETE</td>
        </tr>

<?php
    // database connection
include ("connection.php");

    $stmt = mysqli_query($conn,"select * from patient ORDER BY date ASC;");
    while($patient = mysqli_fetch_array($stmt))
    {
        ?>
        <tr>
            <td><?php echo $patient['id'];?></td>
            <td><?php echo $patient['name'];?></td>
            <td><?php echo $patient['age'];?></td>
            <td><?php echo $patient['gender'];?></td>
            <td><?php echo $patient['mobile'];?></td>
            <td><?php echo $patient['date'];?></td>
            <td><?php echo $patient['time'];?></td>
            <td> <a href="patient_edit.php?id=<?php echo $patient['id'];?>">Edit</a> </td>
            <td> <a href="patient_delete_query.php?id=<?php echo $patient['id'];?>">Delete</a> </td>
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