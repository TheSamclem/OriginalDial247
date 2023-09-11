<!-- Footer -->
    <footer>
        <section class="footer-box">
            <div>
                <a href="#"><img src="img/DIAL SAFE LOGO-02.png" alt=""></a>
            </div>
            <div>
                <h1>Company</h1>
                    <p><a href="about">About</a></p>
                    <p><a href="#">Careers at Dial 24/7</a></p>
                    <p><a href="#contact">Contact Us</a></p>
                    <p><a href="#">Privacy & Security</a></p>
            </div>
            <div>
                <h1>Data Encryption</h1>
                
                    <p><a href="iot.php">Deep learning IoT and Data</a></p>
                    <p><a href="iot.php#dialsafe">DIALSAFE</a></p>
                    <p><a href="iot.php#i-secure">I-Secure</a></p>
                    <p><a href="iot.php#i-dial">I-Dial</a></p>
                    <p><a href="iot.php#i-track">I-Track</a></p>
                    <p><a href="iot.php#dial-threat-hunter">Dial-ThreatHunter</a></p>
                    <p><a href="iot.php#instadial">InstaDial</a></p>
                    <p><a href="iot.php#plume">Plume Model</a></p>
                    <p><a href="iot.php#api-library">Api Library</a></p>
            </div>
            <div id="contact">
                <p>Email: <a href="mailto:<?php echo $social[0]['email']  ?>">
                <?php echo $social[0]['email'] ?></a>
                    </p>
                <p class="special">
                <?php echo $social[0]['address'] ?>
                </p>

                <p>
                    <a href="tel: +2347045774783">+2347045774783</a>
                </p>
            </div>
        </section>
    </footer>




    <section class="last">
                <div class="socials-container">
                    
                    <div socials-box>
                        <a href="https://wa.me/+2347045774783"><i class="ri-whatsapp-fill fs-3 text-white ms-3" id="whatsapp"></i></a>
                        <a href="<?php echo $social[0]['linkedin'] ?>"><i class="ri-linkedin-box-fill fs-3 text-white" id="linkedin"></i></a>
                        <a href="https://www.instagram.com/dial247security/"><i class="ri-instagram-fill fs-3 text-white ms-3" id="instagram"></i></a>
                        <a href="<?php echo $social[0]['twitter'] ?>"><i class="ri-twitter-x-line fs-3 text-white ms-3" id="twitter"></i></a>
                    </div>
                   
                </div>
    </section>








<!-- Bootsrap Js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<!-- Main JS script -->
<script>
     function ViewAll() {
        document.getElementById('services-list').style.height = "auto";
        document.getElementById('btn-box').style.display = "none";
        document.getElementById('hidebtn').style.display = "block";
    }
    function HideAll() {
        document.getElementById('services-list').style.height = "500px";
        document.getElementById('btn-box').style.display = "block";
        document.getElementById('hidebtn').style.display = "none";
    }
</script>
<script type="text/javascript" src="main.js">
</script>

</body>
</html>