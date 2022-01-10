<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
</head>
<body>
    <div>
        <?php
        include ("connection.php");

        $id =$_POST['id'];
        $name =$_POST['name'];
            $stmt = $conn->prepare("insert into admin(id,name)values('$id','$name')");
            $stmt->execute();
            // echo "success";
            $stmt->close();
            $conn->close();
            include("doctor_schedule.html");
            //include("doctor_schedule_list.php");      
        ?>
    </div>
</body>
</html>