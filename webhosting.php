<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Hosting - Apelisolutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-pzh/8SO1s6Zc4K4+ztLtppGSEfdQkHl5U5RUbSrg/WfhY5sn6hVi7U/n4DdZS8oJUQ8+b19L3rZ2ZP0m8T+nVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
<style>
   
   
</style>
</head>
<body>
    <!-- Page title -->
    <div class="container-fluid page-title" style="background-image: url('images/webhosting1.jpg');">
        <div class="container-apeli">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-auto">
                    <h1>Web Hosting</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Web Hosting</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <main class="main">
        <!-- Hero section -->
        <section class="hero" >
            <div class="container-apeli">
                <h1>Reliable & Affordable Web Hosting Solutions</h1>
                <p>Get your website up and running with our high-performance hosting plans.</p>
                <a href="#" class="btn">Get Started</a>
            </div>
        </section>

        <!-- Services section -->
        <section class="services" style="background-image: url('images/hosting-background.jpg'); background-size: cover; background-position: center;">
            <div class="container-apeli">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Why Choose Apelisolutions?</h2>
                        <div class="service-card" onmouseover="zoomIn(this); changeColor(this)" onmouseout="zoomOut(this)">
                            <img src="images/icon-server.png" alt="Server Icon">
                            <h3>Secure & Reliable Servers</h3>
                            <p>Our state-of-the-art infrastructure ensures your website is always online and protected.</p>
                        </div>
                        <div class="service-card" onmouseover="zoomIn(this); changeColor(this)" onmouseout="zoomOut(this)">
                            <img src="images/icon-database.png" alt="Database Icon">
                            <h3>Powerful Databases</h3>
                            <p>Store your website's content and data with ease using our high-performance databases.</p>
                        </div>
                        <div class="service-card" onmouseover="zoomIn(this); changeColor(this)" onmouseout="zoomOut(this)">
                            <img src="images/icon-support.png" alt="Support Icon">
                            <h3>24/7 Support</h3>
                            <p>Our friendly support team is always available to help you with any questions you may have.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <img src="images/website-development.jpg" alt="Image Description" class="img-fluid">
                    </div>

                </div>
                <div class="container-apeli" style="text-align:center;">
                    <h2>Services You Can Trust</h2>
                    <p class="description">Affordable Web Hosting Services in Kenya - Get Reliable Solutions for Every Budget!</p>
                    <a href="#" class="btn btn-learn-more">Learn More ></a>
                </div>
            </div>
        </section>


        <!-- Call to action section -->
        <section class="call-to-action" >
            <div class="container-apeli">
                <h2>Launch Your Website Today!</h2>
                <a href="#" class="btn">Get Started</a>
            </div>
        </section>

    <!-- Features section -->
        <section class="features">
            <div class="container-apeli">
                <div class="row">
                    <div class="col-md-6">
                    <h2 style="text-align: center;">Experience, Digital Solutions, 24/7 Support</h2>
                        <div class="feature-card" onmouseover="zoomIn(this); changeColor(this)" onmouseout="zoomOut(this)">
                            <img src="images/icon-server.png" alt="Server Icon">
                            <h3>Get the Perfect Hosting Service</h3>
                            <p>We offer a variety of hosting plans to meet your needs, from basic shared hosting to powerful VPS hosting.</p>
                        </div>
                        <div class="feature-card" onmouseover="zoomIn(this); changeColor(this)" onmouseout="zoomOut(this)">
                            <img src="images/icon-security.png" alt="Security Icon">
                            <h3>Unparalleled Security & Speed!</h3>
                            <p>Our state-of-the-art infrastructure ensures your website is always secure and lightning-fast.</p>
                        </div>
                        <div class="feature-card" onmouseover="zoomIn(this); changeColor(this)" onmouseout="zoomOut(this)">
                            <img src="images/icon-support.png" alt="Support Icon">
                            <h3>Fast, Reliable & Affordable</h3>
                            <p>Our friendly support team is available 24/7 to help you with any questions you may have.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="images/webhosting1.jpg" alt="Image Description" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="pricing-section">
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
                        </ul>
                        <a href="#" class="btn">Get Quote</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
    // Zoom functionality
    function zoomIn(section) {
        section.classList.add('section-zoom');
        section.classList.add('zoomed');
    }

    function zoomOut(section) {
        section.classList.remove('zoomed');
        setTimeout(() => {
            section.classList.remove('section-zoom');
        }, 300); // Adjust this value to match the transition duration in CSS
    }

    // Color change functionality
    const colors = [
        '#00ff00',   // Green
        '#00ffff',   // Cyan
        '#008080',   // Teal
        '#808000',   // Olive
        '#808080',   // Gray
        '#90EE90',   // Light Green
    ];
    let currentColorIndex = 0;

    function changeColor(section) {
        section.style.backgroundColor = colors[currentColorIndex];
        currentColorIndex = (currentColorIndex + 1) % colors.length;
    }

    function hoverEffect(element) {
                element.classList.toggle('hovered');
            }
</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>
