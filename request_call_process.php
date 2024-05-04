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
        $business_email = $_POST['business_email'];
        $phone_number = $_POST['phone_number'];
        $business = $_POST['business'];

        // Prepare SQL statement to insert into calls
        $sql = "INSERT INTO calls (name, business_email, phone_number, business) VALUES (?, ?, ?, ?)";

        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $business_email, $phone_number, $business);

        // Execute the statement
        if ($stmt->execute()) {
            // Success message
            echo "Your request has been submitted. We shall get back to you as soon as possible.";
            // Redirect to the home page after 5 seconds
            echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 5000);</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $conn->close();
?>
