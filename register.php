<?php
include 'connect.php'; // make sure you have a working DB connection here


// ---------- SIGNUP ----------
if (isset($_POST['signUp'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password != $confirmPassword) {
        echo "Passwords do not match!";
        exit();
    }

    //$password = md5($password);

    // Check if email or username already exists
    $checkQuery = "SELECT * FROM users WHERE email='$email' OR username='$username'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        echo "Email or Username already exists!";
        exit();
    } 

    // Insert user
    $insertQuery = "INSERT INTO users (name, email, username, password) 
                    VALUES ('$name', '$email', '$username', '$password')";

    if ($conn->query($insertQuery) == TRUE) {
        header("Location: login.php"); // login page
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

// ---------- LOGIN ----------
if (isset($_POST['logIn'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);

    $loginQuery = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($loginQuery);

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();  
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php"); // redirect after login
        exit();
    } 
    else {
        echo "Incorrect Username or Password!";
    }
}
?>
