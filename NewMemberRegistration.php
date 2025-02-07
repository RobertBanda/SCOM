<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body {
            background-color: white;
            color: black;
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
            color: black;
        }
        .logo {
            max-width: 50px; 
        }

        .btn-primary {
            background-color: red !important;
            border-color: red !important;
        }
        .btn-primary:hover {
            background-color: darkred !important;
            border-color: darkred !important;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="white ">
            <div class="card shadow">
                <div class="card-header text-white text-center">
                    <img src="images/scom.jpg" alt="SCOM Logo" class="logo"> 
                    <h4>New Member Registration</h4>
                </div>
                <div class="card-body">
                    <form action="register.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control" name="contact" placeholder="Enter Contact" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Region</label>
                            <input type="text" class="form-control" name="region" placeholder="Enter Region" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Zone/Subzone</label>
                            <input type="text" class="form-control" name="zone" placeholder="Enter Zone or Subzone" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
