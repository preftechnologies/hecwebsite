<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HEC Website</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* ================= HEADER STYLES ================= */
        .navbar {
            background-color: #214e34 !important; /* Background color */
        }
        
        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav .nav-link {
            color: #efd0ca !important; /* Text color */
            font-weight: bold;
            padding: 10px 15px;
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            background-color: #efd0ca;
            color: #214e34 !important;
            border-radius: 5px;
        }

        .navbar-nav .btn {
            border: none !important; /* Remove border from Contact Us button */
        }

        /* Mobile Menu Toggle Styling */
        .navbar-toggler {
            border: none;
            color: #efd0ca;
        }

        .navbar-toggler-icon {
            filter: invert(100%);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar-collapse {
                background-color: #214e34;
                text-align: center;
                padding-bottom: 10px;
            }

            .navbar-nav .nav-link {
                display: block;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar Header -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <!-- Logo inside navbar-brand -->
            <a class="navbar-brand" href="/hec_website/index.php">
                <img src="images/logo666.jpeg" alt="HEC Logo" onerror="this.onerror=null; this.src='fallback-image.png';">
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/hec_website/index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/hec_website/students/students.php">Students</a></li>
                    <li class="nav-item"><a class="nav-link" href="/hec_website/studydestinations/studydest.php">Study Destinations</a></li>
                    <li class="nav-item"><a class="nav-link" href="/hec_website/recruiters/recruiters.php">Recruiters</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-light" style="border: none !important;" href="/hec_website/contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
