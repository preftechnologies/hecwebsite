<?php
// PHP Section to Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection details
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";  // Adjust if you have a password set
    $dbname = "hecwebsite";

    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check database connection
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Collect form data and sanitize
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $destination = htmlspecialchars(trim($_POST['study_destination']));
    $level = htmlspecialchars(trim($_POST['study_level']));

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO form_submissions (name, email, mobile, destination, level) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $mobile, $destination, $level);

    if ($stmt->execute()) {
        $response = "Form submitted successfully!";
    } else {
        $response = "Error submitting form: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Form - HEC Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>




        /* Popup Form Styles */
        /* Popup Form Styles */
.popup-form-overlay {
    display: flex;
    justify-content: center;
    align-items: flex-start;  /* Align to the top */
    position: fixed;
    top: 80px;               /* Add space below the header */
    left: 0;
    width: 100%;
    height: calc(100% - 80px); /* Adjust the height accordingly */
    background: rgba(0, 0, 0, 0.7);
    z-index: 1000;
    padding-top: 20px;        /* Additional padding if needed */
}


        .popup-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 400px;
            position: relative;
        }

        .form-header {
            background: #0A2E4F;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .form-header h2 {
            color: #fff;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            color: #fff;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .submit-btn {
            width: 100%;
            background-color: #0A2E4F;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #004a8b;
        }
    </style>
</head>
<body>

<!-- Popup Form -->
<div class="popup-form-overlay" id="popupForm">
    <div class="popup-form">
        <div class="form-header">
            <h2>Start Your Journey!</h2>
            <span class="close-btn" onclick="closePopup()">&times;</span>
        </div>

        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Name <span class="required">*</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>

            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile <span class="required">*</span></label>
                <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required>
            </div>

            <div class="form-group">
                <label for="study-destination">Preferred Study Destination <span class="required">*</span></label>
                <select class="form-control" id="study-destination" name="study_destination" required>
                    <option value="" disabled selected>Please select</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                </select>
            </div>

            <div class="form-group">
                <label for="study-level">Preferred Study Level <span class="required">*</span></label>
                <select class="form-control" id="study-level" name="study_level" required>
                    <option value="" disabled selected>Please select</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Postgraduate">Postgraduate</option>
                    <option value="PhD">PhD</option>
                </select>
            </div>

            <button type="submit" class="submit-btn">SUBMIT</button>
        </form>

        <?php if (isset($response)): ?>
            <div class="alert alert-info mt-3"><?= $response ?></div>
        <?php endif; ?>
    </div>
</div>

<script>
    function closePopup() {
        document.getElementById('popupForm').style.display = 'none';
    }
</script>

</body>
</html>
