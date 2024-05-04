<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apelisolutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-pzh/8SO1s6Zc4K4+ztLtppGSEfdQkHl5U5RUbSrg/WfhY5sn6hVi7U/n4DdZS8oJUQ8+b19L3rZ2ZP0m8T+nVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
   
</head>
<body>
    
        <!-- Main content -->
<section class="services-section" style="background-image: url('images/blue.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Web Design,</h2>
                <h2>Digital Marketing, SEO &</h2>
                <h2> Many More</h2>
                <p>With over 6 years of experience, let us help you take your business to </p>
                <p>new heights by crafting a dynamic online presence that drives </p>
                <p>growth and development.</p>
            </div>

            <br></br>
            <div class="span">
              <a href="services.php" class="btn btn-primary">>> Our services</a>
            </div>
            <div class="col-md-6 align-self-end">
                <img src="images/professional-seo-services.png" alt="Service Photo" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!--animation -->

<div class="top-section">
    <div class="container">
        <h2>Apelisolutions</h2>
        <p>Unlock the full potential of your business with our reliable and cost-</p>
        <p>effective IT services. We provide tailored solutions that will help you reach </p>
        <p>your goals and succeed in today’s competitive market.</p>
        <div class="counters">
            <div>
                <div class="counter" data-count="6">0</div>
                <p>Years of Experience</p>
            </div>
                <br>
            <div>
                <div class="counter" data-count="123">0</div>
                <p>Happy Customers</p>
            </div>
            
            <div>
                <div class="counter" data-count="213">0</div>
                <p>Projects Done</p>
            </div>
            
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 10000; // Increase speed for slower counting

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;

            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 10); // Adjust timeout for smoother animation
            } else {
                counter.innerText = target + "+"; // Add "+" sign after the number
            }
        };

        updateCount();
    });
});
</script>




<!-- about us -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Who we Are</h2>
                <p id="about-text" class="typing-animation"></p>
                <a href="contact.php" class="btn btn-lg btn-contact">CONTACT US NOW</a>
            </div>
            <div class="col-md-4 align-self-center">
                <div class="accordion" id="imageAccordion">
                    <div class="card">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#imageAccordion">
                            <div class="card-body">
                                <div class="slick-slider">
                                    <div><img src="images/apelisolutions.jpg" alt="apelisolutions.jpg"></div>
                                    <!-- Add more images here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="pricing-section" id="pricing">
        <h1>Prices</h1>
        <!-- Pricing table -->
        <div class="pricing-table">
            <div class="box" onmouseover="hoverEffect(this)" onmouseout="hoverEffect(this)">
                <h2>Basic</h2>
                <ul>
                    <li>Up to 10 pages</li>
                    <li>Basic SEO</li>
                    <li>Social Media Integration</li>
                    <li>Content and Images</li>
                    <li>1 Month Free Support</li>
                    <li>Standard Template</li>
                    <li>Basic Contact Form</li>
                </ul>
                <a href="#" class="btn">Get Quote</a>
            </div>

            <div class="box" onmouseover="hoverEffect(this)" onmouseout="hoverEffect(this)">
                <h2>Standard</h2>
                <ul>
                    <li>Up to 5 pages</li>
                    <li>Unique Landing Page Design</li>
                    <li>Social Media Integration</li>
                    <li>WhatsApp Chat Functionality</li>
                    <li>3 Months Free Support and Maintenance</li>
                    <li>Premium Theme</li>
                    <li>Content Management System</li>
                    <li>Custom Template Design</li>
                    <li>Advanced Contact Form</li>
                    <li>Newsletter Integration</li>
                </ul>
                <a href="#" class="btn">Get Quote</a>
            </div>

            <div class="box" onmouseover="hoverEffect(this)" onmouseout="hoverEffect(this)">
                <h2>Advanced</h2>
                <ul>
                    <li>✔ Unique Landing Page Design</li>
                    <li>✔ Social Media Integration</li>
                    <li>✔ WhatsApp Chat Functionality</li>
                    <li>Content and Images</li>
                    <li>✔ Website Analytics Integrated</li>
                    <li>✔ Online Forms</li>
                    <li>✔ Enhanced Web Security (SSL, Firewalls etc)</li>
                    <li>Unlimited Google Map Location</li>
                    <li>Free Domain</li>
                    <li>Delivery Time (2 Weeks)</li>
                    <li>Custom Template Design</li>
                    <li>Advanced Contact Form</li>
                    <li>Newsletter Integration</li>
                    <li>Advanced Analytics Reporting</li>
                    <li>Admin Management System</li>
                </ul>
                <a href="#" class="btn">Get Quote</a>
            </div>
        </div>
    </div>
</section>

<div class="testimonials-container" id="testimonials">
    <h1 style="text-align:center; color: blue;">What People Say About Us</h1>
    <div class="testimonials">
        <!-- Testimonial 1 -->
        <div class="testimonial-item">
            <img src="images/profiles/person1.jpg" alt="Person 1">
            <p>"Apelisolutions has been an integral part of our business growth journey. Their team's expertise in web design, SEO, and digital marketing has helped us expand our online presence and reach our target audience effectively. Their proactive approach and attention to detail have made them a trusted partner. We're grateful for their dedication and highly recommend their services to anyone looking to elevate their digital presence."</p>
            <h3>John Doe</h3>
            <span>★★★★★</span>
        </div>
        <!-- Testimonial 2 -->
        <div class="testimonial-item">
            <img src="images/profiles/person2.jpg" alt="Person 2">
            <p>"Choosing Apelisolutions for our website redesign was one of the best decisions we made for our business. Their team's attention to detail, creativity, and professionalism were exceptional. They listened to our needs and delivered a stunning website that exceeded our expectations. We're thrilled with the results!"</p>
            <h3>Jane Doe</h3>
            <span>★★★★★</span>
        </div>
        <!-- Testimonial 3 -->
        <div class="testimonial-item">
            <img src="images/profiles/person3.jpg" alt="Person 3">
            <p>"Working with Apelisolutions has been a game-changer for our business. Their tailored approach to web design and digital marketing has helped us attract new customers and grow our revenue. The team's commitment to delivering results and their proactive communication make them a trusted partner. We're grateful for their expertise and support."</p>
            <h3>Emmaculate Emali</h3>
            <span>★★★★</span>
        </div>
        <!-- Testimonial 4 -->
        <div class="testimonial-item">
            <img src="images/profiles/person4.jpg" alt="Person 4">
            <p>"Apelisolutions stands out for its professionalism, creativity, and commitment to client satisfaction. They took the time to understand our goals and delivered a website that perfectly reflects our brand identity. Their ongoing support and strategic guidance have been invaluable in achieving our business objectives. We're incredibly pleased with the outcome and look forward to continued collaboration."</p>
            <h3>Emily Johnson</h3>
            <span>★★★★★</span>
        </div>
        <!-- Testimonial 5 -->
        <div class="testimonial-item">
            <img src="images/profiles/person5.jpg" alt="Person 5">
            <p>"Apelisolutions has been instrumental in helping us enhance our online presence. From SEO optimization to social media strategies, their expertise has significantly boosted our visibility and engagement. Their team is responsive, knowledgeable, and dedicated to our success. We highly recommend their services to anyone seeking impactful digital solutions."</p>
            <h3 sytle="color: blue;">David Wilson</h3>
            <span>★★★★</span>
        </div>
        <!-- Testimonial 6 -->
        <div class="testimonial-item">
            <img src="images/profiles/person6.jpg" alt="Person 6">
            <p>"Working with Apelisolutions was a game-changer for our business. Their tailored solutions and innovative strategies have significantly improved our website's performance and increased our online visibility. Their team's professionalism and commitment to delivering results have exceeded our expectations. We highly recommend Apelisolutions to any business seeking to enhance its digital presence."</p>
            <h3>Jyard Emm</h3>
            <span>★★★★</span>
        </div>
        <!-- Testimonial 7 -->
        <div class="testimonial-item">
            <img src="images/profiles/person7.jpg" alt="Person 7">
            <p>"I cannot speak highly enough about Apelisolutions' services. From the initial consultation to the final implementation, their team demonstrated unparalleled expertise and dedication. They took the time to understand our unique needs and delivered a customized solution that perfectly aligned with our goals. Thanks to Apelisolutions, our online presence has never been stronger."</p>
            <h3>Ivy Rose</h3>
            <span>★★★★</span>
        </div>
        <!-- Testimonial 8 -->
        <div class="testimonial-item">
            <img src="images/profiles/person8.jpg" alt="Person 8">
            <p>"We've worked with several digital marketing agencies in the past, but none have come close to Apelisolutions. Their team's professionalism, creativity, and technical expertise set them apart. They took the time to understand our brand and audience, resulting in targeted strategies that yielded impressive results. If you're looking for a digital partner that delivers, look no further than Apelisolutions."</p>
            <h3>Livingstone Apeli</h3>
            <span>★★★★</span>
        </div>
    </div>
    
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const text = "Welcome to Apelisolutions! We are a full-service web design, SEO, digital marketing, search engine marketing, web hosting, and software development company providing solutions for businesses of all sizes. Our industry-leading team of passionate professionals has the skills and knowledge to create powerful, effective strategies that align with your individual needs and objectives. Whether you need help modernizing your website, improving your SEO, increasing your visibility through digital marketing, or developing custom software, we have you covered. Contact us today to learn more about how we can help you achieve success!";
    const paragraph = document.getElementById("about-text");

    let index = 0;
    const interval = setInterval(() => {
        paragraph.textContent += text[index];
        index++;
        if (index === text.length) {
            clearInterval(interval);
        }
    }, 20); // Adjust typing speed as needed (milliseconds per character)
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/header-animate.js"></script>
</body>
</html>

<?php include 'includes/footer.php'; ?>