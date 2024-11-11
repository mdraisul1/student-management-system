<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container-fluid bg-sky">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Logo on the left -->
                    <a href="#" class="navbar-brand text-white fw-bold">W-School</a>
                    
                    <!-- Toggler for mobile view -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <!-- Navbar links aligned to the right -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto"> <!-- ms-auto pushes the ul to the right -->
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">Admission</a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="btn btn-success text-white">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="">
        <div class="hero-section">
            <h1 class="img-text">We tack student with care</h1>
            <img src="img/10861.jpg" alt="">
        </div>

        <div class="content-section mt d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 image-one">
                        <img src="img/10861.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2>Welcome to W-School</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam ea, adipisci laudantium delectus temporibus tempora voluptatem beatae nobis architecto exercitationem sequi itaque voluptatum quasi non repudiandae aperiam quae dolorem nulla?</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- our teacher section  -->
        <div class="teacher-section mt">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Our Teacher</h1>
                    </div>
                    <div class="col-md-4 tea-img">
                        <img src="img/10861.jpg" alt="">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-md-4 tea-img">
                        <img src="img/10861.jpg" alt="">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-md-4 tea-img">
                        <img src="img/10861.jpg" alt="">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- our courses section  -->
        <div class="courses-section mt">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Our Courses</h1>
                    </div>
                    <div class="col-md-4 tea-img">
                        <img src="img/10861.jpg" alt="">
                        <h2>Web Development</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-md-4 tea-img">
                        <img src="img/10861.jpg" alt="">
                        <h2>WordPress Developer</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-md-4 tea-img">
                        <img src="img/10861.jpg" alt="">
                        <h2>Laravel Developer</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- admission form  -->
        <div class="container form-container">
            <h2 class="text-center">Admission Form</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-custom">Apply</button>
                </div>
            </form>
        </div>

    </main>

    <!-- Footer Section -->
    <footer class="bg-sky text-center text-white py-3">
        <p>&copy; 2024 W-School. All rights reserved.</p>
    </footer> 

    <!-- Bootstrap JS Bundle -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
