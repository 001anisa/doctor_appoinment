<!DOCTYPE html>
<html lang="en">
<head>
    <title> patient-login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
    <div>
        <?php
        include ("connection.php");  
        include ("patient_css.php");


        
            
            $name =$_POST['name'];
            $age =$_POST['age'];
            $gender =$_POST['gender'];
            $mobile =$_POST['mobile'];
            $date =$_POST['date'];
            $time =$_POST['time'];
            
            $stmt = $conn->prepare("insert into patient(name,age,gender,mobile,date,time)values('$name','$age','$gender','$mobile','$date','$time');");
            $stmt->execute();
            ?>
            
            <?php
        
            $stmt->close();
            $conn->close();
            //  include("patient_login.html")
            ?>
    <div class="container">
  
  <div class="alert alert-success">
      <strong>Success!</strong> Your Appointment is booked successfully..
  </div>
  
</div>
    </div>
   
</body>
</html>