<?php
 include ("connection.php");
 
     $id = $_REQUEST['id'];
     $stmt = mysqli_query($conn,"select * from patient WHERE id='".$id."';");
     $row = mysqli_fetch_assoc($stmt);
    //  $stmt->execute();
    //  echo "success";
    //  $stmt->close();
    //  $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
    <form action="patient_edit_query.php" method="post">
        <label >id :</label>
        <input type="text"  value="<?php echo $row['id'];?>" name="id"/>
        <label >name :</label>
        <input type="text"  value="<?php echo $row['name'];?>" name="name"/>
        <label >age :</label>
        <input type="text" value="<?php echo $row['age'];?>" name="age"/>
        
        <input type="submit" value="submit" name="submit"/>

    </form>
    
</body>
</html>