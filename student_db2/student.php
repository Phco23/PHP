<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $student_id = $conn->insert_id;
        $sql="INSERT INTO Student (id,name, email)
        VALUES('$student_id','$name','$email')";

        $result=mysqli_query($conn, $sql);
        if($result){
            header('location:index.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User CRUD </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>