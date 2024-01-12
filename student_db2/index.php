<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
        <tbody>
        
        <?php
            $sql="SELECT * FROM Student";
            $result=mysqli_query($conn, $sql);

            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $name = $row['name'];
                    $email = $row['email'];
                    echo '<tr>
                            <th scope="row"></th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>
                                <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                                <button class="btn btn-info"><a href="read.php" class="text-light">Read</a></button>
                                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                            </td>
                          </tr>';
                }
            }
        ?>
        </tbody>
        </table>
        <button class="btn btn-primary my-5"><a href="student.php" class="text-light">Add Student</a></button>
    </div>
</body>
</html>