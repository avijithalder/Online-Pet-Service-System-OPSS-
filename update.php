<?php
include 'connect.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $surname = $_POST['surname'];

    $sql = "UPDATE details SET fname='$fname', surname='$surname' WHERE id='$id'";
    $run = mysqli_query($con, $sql);

    if($run){
        header("Location: admin.php");
        exit;
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
}


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM details WHERE id='$id'";
    $run = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($run);
} else {
    echo "Someting Problem!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
<div class="container">
    <form action="" method="post" id="form">
        <input type="text" name="fname" value="<?= $row['fname'] ?>" size="30">
        <br><br>
        <input type="text" name="surname" value="<?= $row['surname'] ?>" size="30">
        <br><br>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        
        <input type="submit" value="UPDATE">
    </form>
</div>
</body>
</html>
