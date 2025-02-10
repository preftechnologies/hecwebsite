<!DOCTYPE html>
<html lang="en">

<!-- Combined Header and Navbar Start -->
<?php include 'header.php'; ?>
<!-- Header End -->

<!-- Contact Start -->
<div class="contact" style="background: linear-gradient(to right, #f8f9fa, #e9ecef); padding: 60px 0;">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: 50px;">
            <h2 style="font-size: 42px; font-weight: bold; color: #333; text-transform: uppercase;">Kontakt</h2>
            <p style="color: #555; font-size: 18px; max-width: 600px; margin: 0 auto;">Nehmen Sie Kontakt mit uns auf und erfahren Sie, wie wir Ihnen helfen können, Ihr Zuhause oder Büro zum Strahlen zu bringen.</p>
        </div>
        <div class="row">
            <!-- Left side: Contact information -->
            <div class="col-md-6" style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);">
                <h3 style="font-weight: bold; color: #2c3e50; margin-bottom: 20px;"><i class="fa fa-phone-alt" style="color: #007bff; margin-right: 10px;"></i> Kontaktinformationen</h3>
                <p style="line-height: 1.8; color: #555;">Ihr zuverlässiger Reinigungspartner. Bei Fragen oder Anliegen stehen wir Ihnen gerne zur Verfügung. Wir freuen uns darauf, von Ihnen zu hören!</p>
                
                <h4 style="font-weight: bold; color: #2c3e50; margin-top: 30px;"><i class="fa fa-map-marker-alt" style="color: #007bff; margin-right: 10px;"></i> KF GEBAUDEREINIGUNG</h4>
                <p style="color: #777; font-size: 16px;">Werastr.54<br>70190 Stuttgart</p>

                <h4 style="font-weight: bold; color: #2c3e50; margin-top: 30px;"><i class="fa fa-envelope" style="color: #007bff; margin-right: 10px;"></i> Email</h4>
                <p style="font-size: 16px; color: #333;"><strong>info@aria-clean.de</strong></p>

                <h4 style="font-weight: bold; color: #2c3e50; margin-top: 30px;"><i class="fa fa-phone" style="color: #007bff; margin-right: 10px;"></i> Telefon</h4>
                <p style="font-size: 16px; color: #333;">
                    <strong>01638 260673</strong><br>
                    <strong>0711 22058958</strong>
                </p>
            </div>

            <!-- Right side: Contact form -->
            <div class="col-md-6" style="margin-top: 20px;">
                <div class="contact-form" style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-weight: bold; color: #2c3e50; margin-bottom: 20px;"><i class="fa fa-envelope-open-text" style="color: #007bff; margin-right: 10px;"></i> Kontakt-Formular</h3>
                    <form action="send_email.php" method="POST" style="margin-top: 20px;">
                        <div class="form-group">
                            <label for="name" style="font-weight: bold; color: #333;">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Ihr Name" required style="border: 1px solid #ddd; border-radius: 5px; padding: 10px;">
                        </div>
                        <div class="form-group">
                            <label for="email" style="font-weight: bold; color: #333;">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Ihre Email-Adresse" required style="border: 1px solid #ddd; border-radius: 5px; padding: 10px;">
                        </div>
                        <div class="form-group">
                            <label for="message" style="font-weight: bold; color: #333;">Nachricht:</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Ihre Nachricht" required style="border: 1px solid #ddd; border-radius: 5px; padding: 10px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" style="background: linear-gradient(to right, #007bff, #0056b3); border: none; padding: 12px 20px; font-size: 16px; font-weight: bold; border-radius: 5px; transition: 0.3s;">Einreichen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Footer Start -->
<?php include 'footer.php'; ?>
<!-- Footer End -->

<a href="#" class="back-to-top" style="position: fixed; bottom: 20px; right: 20px; background: #007bff; color: #fff; border-radius: 50%; padding: 15px; font-size: 20px; box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
</body>
</html>
