<?php
    $conn = new mysqli('localhost','root','','student2');

    if(!$conn){
        die(mysqli_error($conn));
    }
?>