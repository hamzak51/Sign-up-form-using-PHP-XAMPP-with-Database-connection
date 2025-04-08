<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loginstyle.css" />
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h2>Welcome</h2>
            <form method="post" action="register.php">
            <div class="logo-box">👋</div>
            <form>
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required />
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required />
                    <span class="eye-icon">👁️</span>
                </div>
                <button type="submit" class="login-btn" name="logIn">Login</button>
            </form>
            <p class="signup-text">
                Don't have an account? <a href="signup.php">Sign Up</a>
            </p>
        </div>
    </div>
</body>
</html>
