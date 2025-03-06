<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Location Delivery</title>
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="login-container text-center">
                    <h1 class="mb-4">User Login</h1>
                    <h3><p class="text-secondary">Welcome to Crowdsourced Delivery Management System</p></h3>
                    
                    <form class="mt-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        
                        <a href="home.php" class="btn btn-primary">Login</a>
                        
                        <p>Continue with</p>
                        <button class="btn btn-outline-dark w-100">
                            <i class="fa-brands fa-google me-2"></i>Google
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Add Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/your-code-here.js" crossorigin="anonymous"></script>
</body>
</html>