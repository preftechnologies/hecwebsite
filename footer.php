<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Footer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Footer Styles */
        .footer {
            width: 100%;
            background-color: #0A2E4F;
            color: white;
            padding: 40px 20px;
        }

        .footer-container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
            margin-bottom: 20px;
        }

        .footer-column h4 {
            font-size: 18px;
            margin-bottom: 15px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #b0c4de;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .footer-buttons a {
            display: inline-block;
            background-color: #0063B1;
            color: white;
            padding: 10px 20px;
            margin: 5px 0;
            text-decoration: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .footer-buttons a:hover {
            background-color: #004a8b;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                text-align: center;
            }

            .footer-column {
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">

            <!-- Study Destinations Column -->
            <div class="footer-column">
                <h4>Study Destinations</h4>
                <ul>
                    <li><a href="studydestinations/uk.html">United Kingdom</a></li>
                    <li><a href="studydestinations/usa.html">USA</a></li>
                    <li><a href="studydestinations/canada.html">Canada</a></li>
                    <li><a href="studydestinations/ireland.html">Ireland</a></li>
                    <li><a href="studydestinations/australia.html">Australia</a></li>
                    <li><a href="studydestinations/france.html">France</a></li>
                </ul>
            </div>

            <!-- Help & Contact Column -->
            <div class="footer-column">
                <h4>Help & Contact</h4>
                <ul>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>

            <!-- Careers & Consultation Column -->
            <div class="footer-column footer-buttons">
                <h4>Careers</h4>
                <a href="careers.php">We Are Hiring</a>
                
            </div>

        </div>
    </footer>

</body>
</html>
