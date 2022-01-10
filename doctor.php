<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
</head>
<body>
    <div>
        <?php
        include ("connection.php");
        include ("patient_css.php");

        $id =$_POST['id'];
        $name =$_POST['name'];
            $stmt = $conn->prepare("insert into doctor(id,name)values('$id','$name')");
            $stmt->execute();
            // echo "success";
            $stmt->close();
            $conn->close(); 
            include ("patient_list.php");
        ?>
    </div>
</body>
</html>