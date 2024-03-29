<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .about-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        .about-heading {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 40px;
        }
        .about-content {
            font-size: 18px;
            line-height: 1.8;
        }
    </style>
</head>
<body>
<header>
    <?php include_once 'nav.php'; ?>

</header>

<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="about-heading">About Us</h2>
                <p class="about-content">For too long, psychotherapy clinics have remained sterile, 
                    unwelcoming, clinical environments, adding to the stigma that surrounds mental
                     health care. We believe it doesn’t have to be this way. We view therapy as one of
                      the greatest gifts you can give yourself. Whether you’re hoping to increase daily
                       wellbeing or to reduce symptoms of severe mental illness, there is space for you here. </p>
                <p class="about-content"></p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1499728603263-13726abce5fd?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="About Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
