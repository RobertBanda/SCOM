<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        body {
            background-color: white;
            color: white;
        }
        .card-header {
            background-color: red;
            color: white;
        }
        .home-button {
            background-color: red;
            color: white;
            border: none;
        }
        .form-control, .form-select {
            background-color: white;
            color: black;
            border: 1px solid red;
        }
        .form-label {
            color: white;
        }
        .logo {
            max-width: 50px; 
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="white ">
            <div class="card shadow">
                <div class="card-header text-center">
                    <img src="images/scom.jpg" alt="SCOM Logo" class="logo"> 
                    <h4>Event Registration</h4>
                </div>
                <div class="card-body">
                    <form action="register_event.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Event Name</label>
                            <input type="text" class="form-control" name="event_name" placeholder="Enter Event Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Attendee/Volunteer</label>
                            <select class="form-select" name="role" required>
                                <option value="Attendee">Attendee</option>
                                <option value="Volunteer">Volunteer</option>
                            </select>
                        </div>
                        <button type="submit" class="btn home-button w-100">Register</button>
                    </form>

                    <a href="Dashboard.html">
                        <button class="btn home-button w-100 mt-3">Go to Dashboard</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
