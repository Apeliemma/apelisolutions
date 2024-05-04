<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact- Apelisolutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-pzh/8SO1s6Zc4K4+ztLtppGSEfdQkHl5U5RUbSrg/WfhY5sn6hVi7U/n4DdZS8oJUQ8+b19L3rZ2ZP0m8T+nVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

           <!-- Page title -->
 <div class="container-fluid page-title" style="background-image: url('images/contact-apelisolutions_+254703416091.jpg');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-auto">
                <h1>Contact</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    <!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="info">
						<div class="section_title_container">
							<div class="section_subtitle">Take a look at our</div>
							<div class="section_title">Contact info</div>
						</div>
						<div class="info_title" style="text-decoration: none;">Head Office</div>
                        <ul style="list-style-type: none;">
                           <li>www.apelisolutions.com</li>
                           <li>Gate B, JKUAT Plaza, Kiambu.</li>
                           <li>
                               <p class="contact-footer" style="text-decoration: none;">
                                   <a href="tel:+254794837374">
                                      <span class="icon"><img src="images/call.png" alt="Call Icon"></span> +254 703 416 091
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="contact-footer" style="text-decoration: none;">
                                    <a href="mailto:sales@apelisolutions.com">
                                       <span class="icon"><img src="images/email.png" alt="Email"></span> sales@apelisolutions.com
                                    </a>
                               </p>
                            </li>
                        </ul>

					</div>
				</div>
				<div class="col-lg-8 contact_form_col">
					<div class="section_title_container">
						<div class="section_subtitle">Take a look at our </div>
						<div class="section_title">Get in touch</div>
					</div>
					<div class="contact_form_container">
                    <form action="contact_process.php" method="POST" class="contact_form">
    <div class="row">
        <div class="col-md-6">
            <input type="text" id="email" class="input_item" name="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
            <input type="email" id="email" class="input_item" name="email" placeholder="Your E-mail" required>
        </div>
        <div class="col-md-6">
            <input type="text" id="phone" class="input_item" name="phone" placeholder="Your Phone">
        </div>
        <div class="col-md-6">
            <select class="dropdown_item input_item" id="country" name="country" required>
                <option value="" style="color: blue;">Select a country</option>
            </select>
        </div>
        <div class="col-md-6">
            <select id="service" class="dropdown_item input_item" name="service" required>
                <option disabled>Select service</option>
                <option>Website Design</option>
                <option>Front-end Development</option>
                <option>Back-end Development</option>
                <option>Full-stack Development</option>
                <option>Content Management Systems (CMS) Development</option>
                <option>E-commerce Development</option>
                <option>Custom Web Application Development</option>
                <option>Mobile-Responsive Design</option>
                <option>Web Performance Optimization</option>
                <option>Search Engine Optimization (SEO)</option>
                <option>Web Security</option>
                <option>Website Maintenance and Support</option>
            </select>
        </div>
        <div class="col-md-12">
            <textarea id="contact_message" class="input_item contact_message" name="message" placeholder="Your Message" required data-error="Please, write us a message."></textarea>
        </div>
        <div class="col-md-12">
            <button id="contact_btn" type="submit" class="contact_button trans_200">Submit</button>
        </div>
    </div>
</form>


<script>
    // Function to fetch countries from a JSON API
    function fetchCountries() {
        // You can replace this URL with any source providing a list of countries
        const url = 'https://restcountries.com/v3.1/all';
        
        fetch(url)
        .then(response => response.json())
        .then(data => {
            const selectElement = document.querySelectorAll('.dropdown_item')[0]; // Assuming first dropdown is for country selection
            
            // Sort the countries alphabetically by name
            data.sort((a, b) => {
                const nameA = a.name.common.toUpperCase();
                const nameB = b.name.common.toUpperCase();
                if (nameA < nameB) {
                    return -1;
                }
                if (nameA > nameB) {
                    return 1;
                }
                return 0;
            });

            // Populate the select element with sorted countries
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.textContent = country.name.common;
                selectElement.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching countries:', error));
    }

    // Call the function to fetch countries when the page loads
    window.addEventListener('load', fetchCountries);
</script>


					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<?php include 'includes/footer.php'; ?>

