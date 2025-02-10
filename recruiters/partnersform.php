<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer.php';
require '../SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $company = htmlspecialchars(trim($_POST['company']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Example validation
    if (empty($name) || empty($email) || empty($company) || empty($phone) || empty($message)) {
        $error = "All fields are required.";
    } else {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 2;  // Verbose debug output
        $mail->Debugoutput = 'html';  // Display debug output in browser
        
        try {
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nooralik593@gmail.com'; // Your email
            $mail->Password = 'hork dmlv knxo gzbs'; // Replace with your Gmail App Password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Email Content
            $mail->setFrom($email, $name);
            $mail->addAddress('sktechnologies247@gmail.com'); // Receiving email

            $mail->isHTML(true);
            $mail->Subject = 'New Recruiter Partner Submission';
            $mail->Body = "
                <strong>Full Name:</strong> $name <br>
                <strong>Email:</strong> $email <br>
                <strong>Company:</strong> $company <br>
                <strong>Phone:</strong> $phone <br>
                <strong>Message:</strong> $message
            ";

            $mail->send();
            $success = "Thank you for your interest. We'll contact you soon!";
        } catch (Exception $e) {
            $error = "Error sending email: {$mail->ErrorInfo}";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Recruiter Partner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #0A2E4F;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #0A2E4F;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #004a8b;
        }

        .error {
            color: red;
            text-align: center;
            font-weight: bold;
        }

        .success {
            color: green;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Become a Recruiter Partner</h2>

    <?php if (!empty($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php elseif (!empty($success)): ?>
        <p class="success"><?= $success ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="company">Company Name</label>
            <input type="text" id="company" name="company" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
