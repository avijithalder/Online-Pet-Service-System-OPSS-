<?php

    include 'connect.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM details WHERE id = '$id'";
    
    $run = mysqli_query($con, $sql);

    if(!$run){
        echo 'delete operation failed!';
    } else{
        header("location: admin.php");
    }

?>