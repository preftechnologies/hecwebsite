<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Aria Clean</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        /* Add spacing below header */
        .header-space {
            margin-top: 80px; /* Adjust spacing as needed */
        }

        .hero-section {
            padding-top: 80px; /* Space above hero section */
            padding-bottom: 40px;
        }

        .contact {
            margin-top: 50px; /* Space between hero and contact section */
        }
    </style>
</head>
<body>

    <!-- Include the header -->
    <?php include 'header.php'; ?>

    <!-- Spacer to create space below the header -->
    <div class="header-space"></div>

    

    <!-- Contact Start -->
    
            <div class="row">
                <!-- Left side: Contact information -->
                <div class="col-md-6">
                    <h2><b>Phone Number or Email of Contact Person</b></h2>
                    <br>
                  

                    <p>You can reach us by phone at:</p>
                    <p><strong>+44 (0) 7443 206989</strong><br><strong>0711 22058958</strong></p>

                    <p>Alternatively, feel free to send us an email:</p>
                    <p><strong>info@he-direct.com</strong></p>
                </div>

                <!-- Right side: Contact form -->
                <div class="col-md-6">
                    <div class="contact-form p-4 border rounded shadow">
                        <h2><b>Contact Form</b></h2>
                        <form action="send_email.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>
</html>
