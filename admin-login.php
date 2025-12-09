<?php

include 'connect.php';

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM details WHERE email = '$email' AND pass = '$pass'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {


        if ($email == "admin" && $pass == "admin") {
            header("Location: admin.php");
            exit();
        } 
        else {
            header("Location: index.html");
            exit();
        }

    } else {
        echo "Invalid Email or Password!";
    }
}
?>
