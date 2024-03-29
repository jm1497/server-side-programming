<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        body{
            display: block;
            
        }
        .carousel {
            width: 100%; 
            height: 400px; 
         
           

            }

        
        img{
            position: relative;
            top: 50%; /* Position the image 50% from the top */
            left: 50%; /* Position the image 50% from the left */
            transform: translate(-50%, -50%); /* Translate the image back by half its own width and height */
            max-width:100% ; /* Ensure the image doesn't exceed the container width */
            max-height: 100%; 


        }

        .service-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        .service-item {
            text-align: center;
            margin-bottom: 40px;
        }
        .service-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .service-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
         .service-item {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); 
            transition: box-shadow 0.3s ease;
            padding:10px; 
        }
           
         .service-item:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
            }
        .service-description {
            font-size: 18px;
            color: #6c757d;
        }
       
      
    </style>
</head>
<body>
<header>
    <?php include_once 'nav.php'; ?>

</header>
        
    
<section class="service-section">

      

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="service-item">
                    <i class="bi bi-briefcase-fill service-icon"></i>
                    <h3 class="service-title">Individual Therapy</h3>
                    <p class="service-description">Our individual therapy sessions offer you a safe,
                         confidential space to explore your thoughts, emotions, and experiences. 
                         Tailored to your unique needs, our sessions are conducted by experienced therapists 
                        who specialize in various modalities, ensuring you receive personalized care and support..</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                     <i class="bi bi-person-fill fs-3 text-primary"></i>
                    <h3 class="service-title">Couple Therapy</h3>
                    <p class="service-description">Our Couple Therapy sessions offer a supportive and constructive 
                        environment where you and your partner can address relationship challenges and
                         strengthen your bond. Led by skilled therapists specializing in couples counseling,
                          our sessions are tailored to meet the unique needs of your relationship.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <i class="bi bi-tools service-icon"></i>
                    <h3 class="service-title">Child Therapy</h3>
                    <p class="service-description">Our Child Therapy sessions provide a nurturing and compassionate space for children to express 
                        themselves, explore their emotions, and develop coping skills. Led by experienced child therapists, 
                        our sessions are tailored to meet the unique needs of each child, empowering them to thrive emotionally 
                        and socially.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <i class="bi bi-tools service-icon"></i>
                    <h3 class="service-title">Teletheraphy</h3>
                    <p class="service-description">Our Teletherapy services offer convenient and accessible mental health support
                         from the comfort of your own space. Whether you're facing challenges with anxiety,
                          depression, stress, or simply seeking guidance and support, our licensed therapists 
                          are here to help.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <i class="bi bi-tools service-icon"></i>
                    <h3 class="service-title">Flash appointment</h3>
                    <p class="service-description">Our Flash Appointments service offers immediate access to mental health support
                        whenever you need it most. Whether you're in crisis, seeking quick guidance, 
                        or simply require a brief check-in with a therapist, our Flash Appointments provide a solution.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <i class="bi bi-tools service-icon"></i>
                    <h3 class="service-title">Group Therapy</h3>
                    <p class="service-description">Our Group Therapy sessions provide a supportive and collaborative environment
                         where individuals facing similar challenges can come together to share experiences, 
                         gain insights, and receive mutual support. Led by experienced therapists, our group sessions offer 
                         a unique opportunity for personal growth and connection.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.js"></script>
</body>
</html>
