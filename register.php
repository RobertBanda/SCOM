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
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $region = $_POST['region'];
    $zone = $_POST['zone'];

    $sql = "INSERT INTO members (name, contact, region, zone) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $contact, $region, $zone);

    if ($stmt->execute()) {
        echo '<div class="container mt-5">
                <div class="alert alert-success text-center">
                    
                </div>
<div class="d-flex justify-content-center">
    <a href="EventRegistration.php" class="btn btn-primary">Proceed to Event Registration</a>
</div>

              </div>';
    } else {
        echo '<div class="alert alert-danger">Error: ' . $conn->error . '</div>';
    }

    $stmt->close();
}

$conn->close();
?>
