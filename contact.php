

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c0ntact</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .contact-container {
        background-color: #fff;
        margin-top: 20px;

        }

        .shadow-opacity {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); 
        }

        
    </style>
</head>
<body>
    <header>
        <?php include_once 'nav.php'; ?>

    </header>
    <div class="container    contact-container shadow-opacity">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Contact Us</h2>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-m">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
<!-- php function for the form -->
<?php
// Include database connection
include_once 'config.php';

// Function to sanitize form data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $message = sanitize_input($_POST['message']);

    // Insert data into contacts table
    $query = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("sss", $name, $email, $message);
    
    if ($stmt->execute()) {
        echo "<p>Thank you for your message!</p>";
    } else {
        echo "Error: " . $mysqli->error;
    }
    $stmt->close();
}
?>



<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
