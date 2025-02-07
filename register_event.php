<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ManagementSystem";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = $_POST['event_name'];
    $role = $_POST['role'];

    $sql = "INSERT INTO events (event_name, role) VALUES (?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $event_name, $role);

    if ($stmt->execute()) {
        echo '<div class="alert alert-success">Registration successful!</div>';
    } else {
        echo '<div class="alert alert-danger">Error: ' . $conn->error . '</div>';
    }

    $stmt->close();
}

$conn->close();
?>


<div class="text-center mt-3">
    <a href="Dashboard.html" class="btn btn-primary">Go to Dashboard</a>
</div>
