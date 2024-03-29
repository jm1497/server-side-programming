<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Swiper CSS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* Custom CSS */
        .gallery-item {
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .swiper-slide img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<header>
    <?php include_once 'nav.php'; ?>

</header>

<div class="container">
    <h2 class="text-center mb-4">Gallery with Sliders</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="gallery-item">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/600x400" alt="Image 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/600x400" alt="Image 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/600x400" alt="Image 3">
                        </div>
                        <!-- Add more images here -->
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Swiper JS CDN -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>
