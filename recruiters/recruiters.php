<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Recruiter Page </title>

  <!-- External CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="recruiters.css">

  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <style>
    /* Add spacing below the header */
    .header-space {
        margin-top: 80px; /* Adjust spacing as needed */
    }
  </style>
</head>
<body>
   <!-- Include the header -->
   <?php include '../header.php'; ?>

   <!-- Spacer to create space below the header -->
   <div class="header-space"></div>

  <!-- Recruiter Hero Section -->
  <section class="recruiter-hero">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Left Content -->
      <div class="text-box">
        <h1 class="fw-bold">Let’s conquer the market as an Entrily</h1>
        <p>
          Entrily is looking for student recruitment partners to join our global network as active partners. A partner has full access to over 49,000+ trending courses delivered by more than 720+ top-ranked and leading institutions in top 10+ countries.
        </p>
        <a href="#" class="btn btn-primary btn-lg">Become a recruiter partner</a>
      </div>

      <!-- Right Image -->
      <div class="image-container">
        <img src="images/partnerimage.jpg" alt="Professional Recruiter" class="img-fluid rounded">
      </div>
    </div>
  </section>

  <!--page 2-->
  <section class="recruiter-benefits">
    <div class="container">
      <div class="image-box">
        <img src="images/handsimage.jpg" alt="Recruiter Partnership">
      </div>
      <div class="text-box">
        <h6>RECRUITER PARTNERSHIP</h6>
        <h2>Benefits of becoming an exceptional recruitment partnership</h2>
        <ul>
          <li><i class="bi bi-check-circle-fill"></i> No upfront cost or hidden fees.</li>
          <li><i class="bi bi-check-circle-fill"></i> Commission payouts for every student enrolled.</li>
          <li><i class="bi bi-check-circle-fill"></i> Manage leads, search courses, and submit applications.</li>
          <li><i class="bi bi-check-circle-fill"></i> Free training, visa assistance, and global reach.</li>
          <li><i class="bi bi-check-circle-fill"></i> Open a world of opportunities for students.</li>
        </ul>
        <a href="#" class="btn btn-primary">Become a recruiter partner</a>
      </div>
    </div>
  </section>

  <!-- 3rd page-->
  <section class="about-us py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Content -->
        <div class="col-md-6">
          <h6 class="text-danger fw-bold">ABOUT US</h6>
          <h2 class="fw-bold">
            Your all-in-one platform for building connections and trust with more than
            <span class="highlight">1 Million Prospective Students</span> who are ready for the next step.
          </h2>
        </div>

        <!-- Right Content: Statistics -->
        <div class="col-md-6">
          <div class="stats">
            <div class="stat-item">
              <h3 class="text-danger fw-bold">406+</h3>
              <p>Active Student Recruitment Partners</p>
            </div>
            <div class="stat-item">
              <h3 class="text-danger fw-bold">40,000+</h3>
              <p>Students Enrolled Successfully</p>
            </div>
            <div class="stat-item">
              <h3 class="text-danger fw-bold">720+</h3>
              <p>Global Institutions Application Processed</p>
            </div>
          </div>
          <p class="description mt-4">
            Entrily, a UK-based company, empowers international student recruitment. 
            With a remarkable growth rate of 60% in 2023, Entrily boasts high application 
            success and visa success rates, ensuring smooth transitions for aspiring international students.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

   <!-- Include the footer script -->
   <?php include '../footer.php'; ?>

</body>
</html>
