<!DOCTYPE html>
<html lang="en">
<head>
    <title> doctor_schedule</title>
</head>
<body>
    <div>
        <?php
        include ("connection.php");        
        
            // $conn = mysqli_connect("localhost", "root", "xyz", "registration");
            $id =$_POST['id'];
            $name =$_POST['name'];
            $time =$_POST['time'];
            $date =$_POST['date'];
            $status =$_POST['status'];
            
            $stmt = $conn->prepare("insert into doctor_schedule(id,name,time,date,status)values('$id','$name','$time','$date','$status');");
            $stmt->execute();
            echo "success";
            $stmt->close();
            $conn->close();
            include("doctor_schedule_list.php");
            
    
            
            
        
        
        ?>
    </div>
</body>
</html>