<?php
 include ("connection.php");
 
     $id = $_REQUEST['id'];
     $stmt = mysqli_query($conn,"select * from doctor_schedule WHERE id='".$id."';");
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
    <form action="doctor_edit_query.php" method="post">
        <label >id :</label>
        <input type="text"  value="<?php echo $row['id'];?>" name="id"/>
        <label >name :</label>
        <input type="text"  value="<?php echo $row['name'];?>" name="name"/>
        <label >time :</label>
        <input type="time" value="<?php echo $row['time'];?>" name="time"/>
        <label >date :</label>
        <input type="date" value="<?php echo $row['date'];?>" name="date"/>
        <label >status :</label>
        <input type="text" value="<?php echo $row['status'];?>" name="status"/>
      
        <input type="submit" value="submit" name="submit"/>

    </form>
    
</body>
</html>