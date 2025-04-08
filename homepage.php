<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello
            <?php
            if (isset($_SESSION['email'])) {
            $email= $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT users.* FROM users WHERE users.email='$email'");
            while ($row = mysqli_fetch_array($query)) {
            echo $row['name']; // safely echo the user's name
            }
            }
            else {
            echo "Guest";
            }
            ?>
            :)
        </p>
        <a href="logout.php" style="width: 100%; padding: 12px; background: linear-gradient(to right, #00c6ff, #7f5af0); color: white; border: none; border-radius: 25px; font-weight: 600; cursor: pointer; transition: background 0.3s; ">Logout</a>
    </div>
</body>
</html>