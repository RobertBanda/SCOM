<?php
$servername = "localhost";
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "ManagementSystem"; // Database name


$logfile = "activity.log";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Log connection success or failure
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error, 3, $logfile);
    die("Connection failed: " . $conn->connect_error);
} else {
    error_log("Database connected successfully.", 3, $logfile);
}

// Query to get data from the database
$sql = "SELECT * FROM users";  
$result = $conn->query($sql);

// Log query result or failure
if ($result->num_rows > 0) {
    error_log("Query executed successfully. Retrieved " . $result->num_rows . " records.", 3, $logfile);
    echo '<div class="container mt-5">';
    echo '<h3>Users Summary</h3>';
    echo '<table class="table table-bordered">';
    echo '<thead><tr><th>ID</th><th>Username</th><th>Email</th></tr></thead>';
    echo '<tbody>';
    

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["username"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    error_log("No records found in the database.", 3, $logfile);
    echo "No records found";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

</body>
</html>
