<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    header("Location: Dashboard.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            color: white;
        }
        .logo {
            max-width: 50px;
        }
        .card {
            border: none;
        }
        .card-header {
            background-color: red;
            color: white;
        }
        .form-control, .form-select {
            background-color: black;
            color: white;
            border: 1px solid red;
        }
        .btn-primary {
            background-color: red;
            border: none;
        }
        .btn-primary:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="white">
            <div class="card shadow">
                <div class="card-header text-center">
                    <img src="images/scom.jpg" alt="SCOM Logo" class="logo"> 
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <p class="mt-3 text-center">
                        <a href="signup.php" class="text-red">Don't have an account? Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
