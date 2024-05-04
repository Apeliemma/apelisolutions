
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apelisolutions";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $service = $_POST['service'];
        $message = $_POST['message'];

        // Prepare SQL statement to insert into contacts
        $sql = "INSERT INTO contacts (name, email, phone, country, service, message) VALUES (?, ?, ?, ?, ?, ?)";

        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $email, $phone, $country, $service, $message);

        // Execute the statement
        if ($stmt->execute()) {
            // Success message
            echo "Your message has been sent successfully. We shall get back to you as soon as possible.";
            // Redirect to the home page after 3 seconds
            echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 3000);</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $conn->close();
?>
