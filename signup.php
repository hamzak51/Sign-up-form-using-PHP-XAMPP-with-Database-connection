<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signupstyle.css" />
</head>
<body>
    <div class="signup-container">
        <div class="signup-card">
            <h2>Create Account</h2>
            <form method="post" action="register.php">
            <div class="logo-box">✍</div>
            <form>
                <div class="input-group">
                    <input type="text" name="name" placeholder="Full Name" required />
                </div>
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required />
                </div>
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required />
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required />
                </div>
                <div class="input-group">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required />
                </div>
                <button type="submit" class="signup-btn" name="signUp">Sign Up</button>
            </form>
            <p class="login-text">
                Already have an account? <a href="login.php">Login</a>
            </p>
        </div>
    </div>
    <!--<script src="Script.js"></script>-->
</body>
</html>
