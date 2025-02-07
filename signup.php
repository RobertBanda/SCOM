<?php
$servername = "localhost";
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "ManagementSystem"; // Database name


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password']; 
    $email = $_POST['email']; 


    if (empty($username) || empty($password) || empty($confirm_password) || empty($email)) {
        echo '<div class="alert alert-danger">Please fill in all fields.</div>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger">Invalid email format.</div>';
    } elseif ($password !== $confirm_password) {
        echo '<div class="alert alert-danger">Passwords do not match.</div>';
    } else {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            echo '<div class="alert alert-danger">Username already taken!</div>';
        } else {

            $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $hashed_password, $email);

            if ($stmt->execute()) {

                header("Location: login.php");
                exit();
            } else {
                echo '<div class="alert alert-danger">Error: ' . $conn->error . '</div>';
            }
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
                    <h4>Sign Up</h4>
                </div>
                <div class="card-body">
                    <form action="signup.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label> 
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    </form>
                    <p class="mt-3 text-center">
                        <a href="login.php" class="text-white">Already have an account? Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
