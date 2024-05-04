<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Apelisolutions</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-pzh/8SO1s6Zc4K4+ztLtppGSEfdQkHl5U5RUbSrg/WfhY5sn6hVi7U/n4DdZS8oJUQ8+b19L3rZ2ZP0m8T+nVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include('includes/header.php'); ?>

    
            <!-- Page title -->
<div class="container-fluid page-title" style="background-image: url('images/about-apelisolutions.jpg');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-auto">
                <h1>About</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


    <!-- Main content -->
    <section class="about-section" >
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Who we Are</h2>
                <p id="about-text" class="typing-animation"></p>
                <a href="contact.php" class="btn btn-lg btn-contact">CONTACT US NOW</a>
                <br>
                <br>

                <a href="index.php#choose-us-section" class="btn btn-lg btn-contact">Why Choose Us</a>
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


<div class="consultation-section" style="background-image: url('images/consultation.jpg');">
    <div class="container">
        <h2>Turn Your Prospects Into Buyers</h2>
        <p>Take the first step towards success with a free consultation – contact us </p>
        <p>today!</p>
        <a href="contact.php" class="btn btn-lg btn-contact">CONTACT US NOW</a>

    </div>
</div>


	<!-- Call Back -->

	<div class="call" >
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="call_image"><img src="images/request-call-back.jpg" alt=""></div>
				</div>
				<div class="col-lg-8">
					   <div class="call_container">
                          <div class="section_title_container">
                                <div class="section_subtitle animated">Take a look at our</div>
                               <div class="section_title animated">Request a Call Back</div>
                           </div>

						<div class="call_form_container">
							<form action="request_call_process.php" method="POST" class="call_form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" id="name" class="input_item" name="name" placeholder="Your Name" required="required">
									</div>
									<div class="col-md-6">
										<input type="email" id="business_email" class="input_item" name="business_email" placeholder="Your E-mail" required="required">
									</div>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="input_item" name="phone_number" placeholder="Your Phone">
									</div>
									<div class="col-md-6">
										<select id="business" class="dropdown_item input_item" name="business">
											<option disabled>Service Type</option>
											<option value="Website Hosting">Website Hosting</option>
											<option Value="Business Emails">Business Emails</option>
                                            <option value="Website Development">Website Development</option>
                                            <option value="E-commerce Development">E-Commerce Development</option>
                                            <option value="Back-end Development">Back-end Development</option>
                                            <option value="SEO">Search Engine Optimization (SEO)</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
										</select>
									</div>
									<div class="col-md-12">
										<button id="call_btn" type="submit" class="call_button trans_200" value="Submit">submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


   <?php include('includes/footer.php'); ?>

    <!-- Bootstrap JavaScript -->
    <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
