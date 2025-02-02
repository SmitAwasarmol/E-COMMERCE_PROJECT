<?php
    include "authguard.php";
    include "menu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Custom styles for the body */
        body {
            background-color: #f8f9fa; /* Light background for the body */
            font-family: Arial, sans-serif; /* Custom font for the body */
        }
        .form-container {
            border-radius: 8px; /* Rounded corners for the form */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
            background-color: white; /* Background color for the form */
            padding: 20px; /* Padding for the form */
            margin: 50px auto; /* Center the form on the page */
            width: 50%; /* Width of the form */
        }
        .form-control {
            border-radius: 4px; /* Rounded corners for form controls */
        }
        .btn-danger {
            background-color: #dc3545; /* Button background color */
            border: none; /* Remove border */
        }
        .btn-danger:hover {
            background-color: #c82333; /* Button hover color */
        }
        h3 {
            font-weight: bold; /* Bold font for the heading */
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="upload.php" method="post" class="form-container" enctype="multipart/form-data">
            <h3 class="text-center text-dark">Upload Products Here</h3>
            <input class="form-control mt-3" type="text" placeholder="Product Name" name="name" required>
            <input class="form-control mt-2" type="number" placeholder="Product Price" name="price" required>
            <textarea class="form-control mt-2" name="details" placeholder="Product Description" cols="20" rows="4" required></textarea>
            <input class="form-control mt-2" type="file" name="pdtimg" accept=".jpg,.png" required>
            <div class="mt-3 text-center">
                <button class="btn btn-danger">Upload</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-1r8c3itW5UrbQDi0TOxZKlzZTH6MnY3KnQl0AsGZP5mbtEIE6mEwvFjYOMIc5zV7" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-3m9hxXgPPLP0zx1hFbXH7H9H2G7YGLd3Sev+2D/AW/wM2wJQcABk1FjAakbtxg/2" crossorigin="anonymous"></script>
</body>
</html>


