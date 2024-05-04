<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="index.php"><img src="images/apelisolutions-logo.png" alt="Apelisolutions Logo"style="width: 100px; height: auto; border-radius: 50%;"></a>
                <p>Apelisolutions is a leading IT services company in Kenya. We offer IT services such as software development, web design, website hosting, SEO, and more.</p>
            </div>
            <div class="col-md-4">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">SEM</a></li>
                    <li><a href="#">Software Development</a></li>
                    <li><a href="#">Web Hosting</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Contacts</h4>
                <p>Get in touch</p>
                <p class="contact-footer"><a href="tel:+254794837374"><span class="icon"><img src="images/call.png" alt="Call Icon"></span> +254 703 416 091</a></p>
                <p class="contact-footer"><span class="icon"><img src="images/email-env.jpg" alt="Email Icon"></span> sales@apelisolutions.com</p>


                <!-- Social Media Links -->
                <div class="social-links">
                    <a href="https://www.facebook.com/apelisolutions"><img src="images/fb.jpg" alt="Facebook"></a>
                    <a href="https://twitter.com/apelisolutions"><img src="images/x.png" alt="Twitter"></a>
                    <a href="https://www.linkedin.com/company/apelisolutions"><img src="images/linkedin.png" alt="LinkedIn"></a>
                    <a href="#" onclick="generateWhatsAppMessage()"><img src="images/whatsapp.png" alt="WhatsApp"></a>
                    <a href="mailto:sales@apelisolutions.com"><img src="images/email.png" alt="Email"></a>
                </div>

                <script>
                    // Function to generate the WhatsApp message dynamically
                    function generateWhatsAppMessage() {
                    var currentDate = new Date();
                    var currentHour = currentDate.getHours();
                    var greeting;

                    // Determine the appropriate greeting based on the current time
                    if (currentHour < 12) {
                    greeting = "Good morning";
                    } else if (currentHour < 18) {
                    greeting = "Good afternoon";
                    } else {
                    greeting = "Good evening";
                    }
 
                   // Generate the WhatsApp message
                   var message = encodeURIComponent(greeting + ", Apelisolutions. I would like to know more about your services.");

                  // Create the WhatsApp link with the generated message
                  var whatsappLink = "https://api.whatsapp.com/send?phone=0703414091&text=" + message;

                  // Redirect to the WhatsApp link
                  window.location.href = whatsappLink;
                  }
                </script>


            </div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <p>&copy; 2017 - <?php echo date("Y"); ?>  Apelisolutions | All Rights Reserved | Apelisolutions Consultants</p>
    </div>
</footer>


