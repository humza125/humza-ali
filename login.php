<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }
        .login-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 1rem;
        }
        input {
            padding: 8px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 4px;
        }
        button {
            background-color: #1877f2;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            width: 100%;
            cursor: pointer;
        }
        button:hover {
            background-color: #166fe5;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Demo credentials (replace with database authentication in production)
        if ($username === "admin" && $password === "password") {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    }
    ?>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>