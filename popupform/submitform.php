<?php
$servername = "localhost";
$username = "root"; // Default for XAMPP/MAMP
$password = ""; // Default for XAMPP/MAMP
$database = "hecwebsite"; // The database we created

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $destination = htmlspecialchars($_POST['study-destination']);
    $level = htmlspecialchars($_POST['study-level']);

    // Prepare SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO form_submissions (name, email, mobile, destination, level) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $mobile, $destination, $level);

    if ($stmt->execute()) {
        echo "Thank you, $name! Your form has been submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Error: Form submission failed.";
}
?>
