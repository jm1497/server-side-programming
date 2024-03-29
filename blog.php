

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    
    </style>
</head>
<body>
    <header>
        <?php include_once 'nav.php'; ?>

    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Blog Post 1 -->
                <div class="blog-post">
                    <h2>Post Title 1</h2>
                    <p class="text-muted">Posted on January 1, 2024 by John Doe</p>
                    <img src="https://via.placeholder.com/800x400" alt="Post Image" class="img-fluid mb-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus, arcu et fermentum dictum, ligula lorem tempus enim, eget vestibulum sapien nisi at ex. Nulla facilisi.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                
                <!-- Blog Post 2 -->
                <div class="blog-post">
                    <h2>Post Title 2</h2>
                    <p class="text-muted">Posted on January 5, 2024 by Jane Smith</p>
                    <img src="https://via.placeholder.com/800x400" alt="Post Image" class="img-fluid mb-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus, arcu et fermentum dictum, ligula lorem tempus enim, eget vestibulum sapien nisi at ex. Nulla facilisi.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Sidebar Widget -->
                <div class="card">
                    <h5 class="card-header">About</h5>
                    <div class="card-body">
                        <p class="card-text">This is a blog about various topics.</p>
                    </div>
                </div>
                <!-- Sidebar Widget -->
                <div class="card mt-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 2</a></li>
                            <li><a href="#">Category 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- php function for the function-->
    <?php
    //  database connection
    include_once 'config.php';

    // Fetch featured articles from the database
    $query = "SELECT * FROM articles ORDER BY created_at DESC LIMIT 3";
    $result = $mysqli->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['content']) . "</p>";
            }
        } else {
            echo "No articles found.";
        }
        $result->free();
    } else {
        echo "Error: " . $mysqli->error;
    }
    ?>


<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
