<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Destinations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="studydest.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        /* Add spacing below header */
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

   <!-- Hero Section (Optional) -->
   <section class="hero-section text-center bg-primary text-white py-5">
       <div class="container">
           <h1 class="fw-bold">Explore Study Destinations</h1>
           <p>Find the perfect country to begin your higher education journey.</p>
       </div>
   </section>

   <div class="mb-4"></div>

   <div class="container">
       <div class="row justify-content-center">
           <!-- Country Blocks -->
           <div class="col-md-4 mb-4">
               <a href="uk.html" class="country-link">
                   <div class="country-block" style="background-image: url('images/ukflag.jpg');">
                       <h3>United Kingdom</h3>
                   </div>
               </a>
           </div>
           
           <div class="col-md-4 mb-4">
               <a href="australia.html" class="country-link">
               <div class="country-block" style="background-image: url('images/ausflag.jpg');">
                   <h3>Australia</h3>
               </div>
               </a>
           </div>
           
           <div class="col-md-4 mb-4">
               <a href="canada.html" class="country-link">
               <div class="country-block" style="background-image: url('images/canadaflag.jpg');">
                   <h3>Canada</h3>
               </div>
               </a>
           </div>

           <div class="col-md-4 mb-4">
               <a href="austria.html" class="country-link">
               <div class="country-block" style="background-image: url('images/austriaflag.jpg');">
                   <h3>Austria</h3>
               </div>
               </a>
           </div>

           <div class="col-md-4 mb-4">
               <a href="france.html" class="country-link">
               <div class="country-block" style="background-image: url('images/franceflag.jpg');">
                   <h3>France</h3>
               </div>
               </a>
           </div>

           <div class="col-md-4 mb-4">
               <a href="ireland.html" class="country-link">
               <div class="country-block" style="background-image: url('images/irelandflag.jpg');">
                   <h3>Ireland</h3>
               </div>
               </a>
           </div>

           <div class="col-md-4 mb-4">
               <a href="italy.html" class="country-link">
               <div class="country-block" style="background-image: url('images/italyflag.jpg');">
                   <h3>Italy</h3>
               </div>
               </a>
           </div>

           <div class="col-md-4 mb-4">
               <a href="spain.html" class="country-link">
               <div class="country-block" style="background-image: url('images/spainflag.jpg');">
                   <h3>Spain</h3>
               </div>
               </a>
           </div>

           <div class="col-md-4 mb-4">
               <a href="switzerland.html" class="country-link">
               <div class="country-block" style="background-image: url('images/swissflag.jpg');">
                   <h3>Switzerland</h3>
               </div>
               </a>
           </div>
       </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

   <!-- Include the footer -->
   <?php include '../footer.php'; ?>

</body>
</html>
