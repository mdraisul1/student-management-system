<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container login-container bg-white">
        <div class="text-center mb-4">
            <h2>Login</h2>
        </div>
        <form action="login-check.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">UserName:</label>
                <!-- <input type="text" class="form-control" id="username" placeholder="Enter your username"> -->
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <!-- <input type="password" class="form-control" id="password" placeholder="Enter your password"> -->
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-custom">Login</button>
            </div>
        </form>
    </div>
</body>
</html>