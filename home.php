<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
            body, html {
        height: 100%;
                        }
        body {
            
           
            flex-direction: column;
            
        }
        .content {
            flex: 1;
        }
        .jumbotron {
            background-image: url('https://images.unsplash.com/photo-1533228876829-65c94e7b5025?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); 
            background-size: cover;
            background-position: center;
            font: 800;
            color: ;
            text-align: center;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            }
        .cards, row{
            height: ;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
        

        }
        .card-body {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); 
            transition: box-shadow 0.3s ease; 
            }
        .card-body:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5); 
            }
       
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        

        }
        .footer-link {
            color: #fff;
            text-decoration: none;
        }
        .footer-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <?php include_once 'nav.php'; ?>

</header>


    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"><b><i>BREAKTHROUGHS BEGINS HERE</i></b></h1>
            <p class="lead">At BenchMark Physical Therapy, we empower people of all ages 
                and activity levels to start moving with confidence.</p>
            <hr class="my-4">
            <p>Learn more about what we can do for you.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Book now</a>
        </div>
    </div>
        <div class="cards">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Card 1 -->
                <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Personalized</h5>
                    <p class="card-text">One-on-one attention and an individualized care plan are central to
                         our “listen-and-adopt” approach</p>
                    </div>
                </div>
                </div>
                <!-- Card 2 -->
                <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Dedicated</h5>
                    <p class="card-text">You’ll work with the same clinical team throughout your journey,
                         building trust as you build strength</p>
                    </div>
                </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Expert</h5>
                    <p class="card-text">At every Benchmark location, you’ll find professional, supportive,
                         and results-driven therapists.</p>
                    </div>
                </div>
                </div>
               
            </div>
        </div>
    
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>We provide reliable customer servive to our
                     customers by ensuring that customer satisfaction is our focus</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="home.php" class="footer-link">Home</a></li>
                    <li><a href="about.php" class="footer-link">About Us</a></li>
                    <li><a href="services.php" class="footer-link">Services</a></li>
                    <li><a href="contact.php" class="footer-link">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <address>
                    123 Street Name<br>
                    City, State ZIP<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <p>&copy; 2024 Proxima technologies. All rights reserved.</p>
            </div>
        </div>
     </div>
    </footer>




<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
