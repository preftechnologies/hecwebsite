<style>
    /* Footer Styling Fix */
    .footer {
        width: 100%; /* Ensures full width */
        background: linear-gradient(135deg, #1d1d1d, #333);
        color: #ffffff;
        padding: 40px 0;
        font-family: Arial, sans-serif;
    }

    .footer .container {
        width: 90%; /* Adjusted width to fit nicely on all pages */
        max-width: 1200px;
        margin: auto;
        padding: 0 20px;
    }

    .footer .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    .footer h2 {
        font-size: 22px;
        margin-bottom: 15px;
        color: #f1c40f;
    }

    .footer p {
        font-size: 16px;
    }

    .footer .footer-social a {
        display: inline-block;
        color: #ffffff;
        background: rgba(255, 255, 255, 0.1);
        padding: 10px;
        border-radius: 50%;
        margin-right: 8px;
        font-size: 18px;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .footer .footer-social a:hover {
        background: #f1c40f;
        color: #222;
        transform: scale(1.1);
    }

    .footer .map-container {
        width: 100%;
        height: 250px;
        background: #222;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .footer .row {
            flex-direction: column;
            text-align: center;
        }
        .footer .map-container {
            margin-top: 20px;
        }
    }
</style>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="footer-contact">
                    <h2>GET IN TOUCH</h2>
                    <p><i class="fa fa-map-marker-alt"></i> Anchor Unit, 5 Limeharbour Court, London, E14 9RH, United Kingdom</p>
                    <p><i class="fa fa-phone-alt"></i> +012 345 67</p>
                    <p><i class="fa fa-envelope"></i> info@example.com</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <h2>OUR LOCATION</h2>
                <div class="map-container">
                    <div id="googleMap" style="width:100%; height:100%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvVJaX6nBeOwR8PqQQopoVTtXGdT7leAA&callback=initMap" async defer></script>
<script>
    function initMap() {
        const officeLocation = { lat: 51.4974264855, lng: -0.0130341130404 };
        const map = new google.maps.Map(document.getElementById("googleMap"), {
            zoom: 15,
            center: officeLocation,
        });
        new google.maps.Marker({
            position: officeLocation,
            map: map,
            title: "Anchor Unit, 5 Limeharbour Court",
        });
    }
</script>
