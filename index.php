<?php
include 'db_connect.php'; 

$sql = "SELECT m.id AS member_id, m.name, m.contact, m.region, m.zone, 
               e.event_name, e.role 
        FROM members m
        LEFT JOIN events e ON m.id = e.member_id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regusterd Members and Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            background-color: red;
            color: white;
        }
        thead {
            background-color: red;
        }
        th, td {
            color: white;
        }
        .logo {
            max-width: 150px; 
        }
    </style>
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center">
        <img src="images/scom.jpg" alt="SCOM Logo" class="logo"> 
        Regusterd  Member & Their Events
    </h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Member ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Region</th>
                <th>Zone</th>
                <th>Event Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['member_id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['contact']}</td>
                            <td>{$row['region']}</td>
                            <td>{$row['zone']}</td>
                            <td>" . ($row['event_name'] ? $row['event_name'] : 'No Event') . "</td>
                            <td>" . ($row['role'] ? $row['role'] : 'No Role') . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

<?php
$conn->close();
?>
