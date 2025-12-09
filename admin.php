<?php
include 'connect.php';

$sql = "SELECT * FROM details";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<h2>All User Details</h2>

<div class="btn" >

<a href="index.html"><input type="submit" value="LogOut" class="bt"></a>

</div>

<div class="list">
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>First Name</th>
            <th>Surname</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){   
        ?>
            <tr>
                <td><?= $row['fname'] ?></td>
                <td><?= $row['surname'] ?></td>
                <td><?= $row['dob'] ?></td>
                <td><?= $row['gender'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <a style="color:blue" href="update.php?id=<?= $row['id'] ?>">Update</a> |
                    <a style="color:blue" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
            }
        } else {
            echo "No records found";
        }
        ?>
    </table>
</div>

</body>
</html>
