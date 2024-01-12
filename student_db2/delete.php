<?php
    include 'connect.php';
    if(isset($_GET['deletename'])){
        $id=$_GET['deletename'];

        $sql="DELETE FROM Student WHERE Student ID=$id";
        $result=mysqli_query($conn, $sql);
        if($result){    
            header('location:index.php');
        }else{
            die(mysqli_error($conn));
        }
    }   
    
?>