<?php
// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hecwebsite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data and escape it to prevent SQL injection
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);

    // Define the target directory for video uploads
    $targetDir = __DIR__ . "/videos/";  // Absolute path to the 'videos' folder

    // Ensure the directory exists, create if not
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);  // Create the folder if it doesn't exist
    }

    // Handle video file upload
    if (isset($_FILES['video']) && $_FILES['video']['error'] == 0) {
        $videoName = basename($_FILES['video']['name']);
        $videoFile = $targetDir . $videoName;  // Full path on the server
        $videoUrl = "videos/" . $videoName;    // Relative URL to save in the database

        // Move the uploaded video to the target directory
        if (move_uploaded_file($_FILES['video']['tmp_name'], $videoFile)) {
            // Insert video details into the database
            $sql = "INSERT INTO videos (title, description, video_url) VALUES ('$title', '$description', '$videoUrl')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Video uploaded and saved successfully!</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Failed to upload video.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>No valid video uploaded or there was an error with the upload.</div>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fc;
            font-family: Arial, sans-serif;
            padding-top: 50px;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            font-size: 30px;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-label {
            font-weight: bold;
            font-size: 16px;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            box-shadow: none;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            border-radius: 8px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .mb-3 {
            margin-bottom: 20px;
        }
        .alert {
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Add New Video</h1>
        <!-- HTML form for video upload -->
        <form action="addvideos.php" method="POST" enctype="multipart/form-data">
            
            <!-- Video Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Video Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <!-- Video Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Video Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <!-- Video Upload -->
            <div class="mb-3">
                <label for="video" class="form-label">Choose Video File:</label>
                <input type="file" name="video" id="video" class="form-control" accept="video/*" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Upload Video</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

