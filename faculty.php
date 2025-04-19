<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <style>
        .faculty-card {
            transition: transform 0.3s;
            margin-bottom: 30px;
        }
        .faculty-card:hover {
            transform: translateY(-5px);
        }
        .faculty-img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .department-section {
            padding: 60px 0;
        }
        .department-title {
            margin-bottom: 40px;
            position: relative;
            padding-bottom: 15px;
        }
        .department-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="grlg.jpg" alt="Modern School Logo" height="50">
                <span>Modern School</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                        <div class="nav-preview">
                            <div class="preview-title">Welcome to Modern School</div>
                            <div class="preview-content">Experience excellence in education with our comprehensive learning programs and state-of-the-art facilities.</div>
                            <a href="index.html" class="preview-link">Explore Homepage <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                        <div class="nav-preview">
                            <div class="preview-title">About Our School</div>
                            <div class="preview-content">Learn about our 30+ years of excellence in education, our mission, and our commitment to student success.</div>
                            <a href="about.html" class="preview-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="academic.html">Academic</a>
                        <div class="nav-preview">
                            <div class="preview-title">Academic Programs</div>
                            <div class="preview-content">Discover our comprehensive curriculum, specialized courses, and academic achievements.</div>
                            <a href="academic.html" class="preview-link">View Programs <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="faculty.html">Faculty</a>
                        <div class="nav-preview">
                            <div class="preview-title">Our Faculty</div>
                            <div class="preview-content">Meet our experienced and dedicated teaching staff who are committed to student success.</div>
                            <a href="faculty.html" class="preview-link">Meet Faculty <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="features.html">Features</a>
                        <div class="nav-preview">
                            <div class="preview-title">School Features</div>
                            <div class="preview-content">Explore our modern facilities, sports complex, laboratories, and other amenities.</div>
                            <a href="features.html" class="preview-link">View Features <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.html">News</a>
                        <div class="nav-preview">
                            <div class="preview-title">Latest News</div>
                            <div class="preview-content">Stay updated with the latest happenings, events, and achievements at Modern School.</div>
                            <a href="news.html" class="preview-link">Read News <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                        <div class="nav-preview">
                            <div class="preview-title">Contact Us</div>
                            <div class="preview-content">Get in touch with us for admissions, inquiries, or to schedule a campus visit.</div>
                            <a href="contact.html" class="preview-link">Contact Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admission.html">Admission</a>
                        <div class="nav-preview">
                            <div class="preview-title">Admission Process</div>
                            <div class="preview-content">Learn about our admission process, requirements, and important dates.</div>
                            <a href="admission.html" class="preview-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="student-login.html">Student Login</a>
                        <div class="nav-preview">
                            <div class="preview-title">Student Portal</div>
                            <div class="preview-content">Access your academic records, assignments, and school resources.</div>
                            <a href="student-login.html" class="preview-link">Login Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-primary text-white py-5">
        <div class="container">
            <h1 class="display-4 text-center">Our Distinguished Faculty</h1>
            <p class="lead text-center">Meet our experienced and dedicated teaching staff</p>
        </div>
    </div>

    <!-- Science Department -->
    <section class="department-section bg-light">
        <div class="container">
            <h2 class="text-center department-title">Science Department</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card faculty-card text-center">
                        <div class="card-body">
                            <img src="https://via.placeholder.com/200" alt="Dr. Rajesh Kumar" class="faculty-img">
                            <h4 class="card-title">Dr. Rajesh Kumar</h4>
                            <p class="text-muted">Head of Science Department</p>
                            <p class="card-text">Ph.D. in Physics with 15 years of teaching experience</p>
                            <div class="social-links">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card faculty-card text-center">
                        <div class="card-body">
                            <img src="https://via.placeholder.com/200" alt="Dr. Priya Sharma" class="faculty-img">
                            <h4 class="card-title">Dr. Priya Sharma</h4>
                            <p class="text-muted">Chemistry Professor</p>
                            <p class="card-text">Ph.D. in Chemistry with expertise in Organic Chemistry</p>
                            <div class="social-links">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card faculty-card text-center">
                        <div class="card-body">
                            <img src="https://via.placeholder.com/200" alt="Prof. Amit Patel" class="faculty-img">
                            <h4 class="card-title">Prof. Amit Patel</h4>
                            <p class="text-muted">Biology Professor</p>
                            <p class="card-text">M.Sc. in Biology with specialization in Botany</p>
                            <div class="social-links">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mathematics Department -->
    <section class="department-section">
        <div class="container">
            <h2 class="text-center department-title">Mathematics Department</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card faculty-card text-center">
                        <div class="card-body">
                            <img src="https://via.placeholder.com/200" alt="Dr. Suresh Verma" class="faculty-img">
                            <h4 class="card-title">Dr. Suresh Verma</h4>
                            <p class="text-muted">Head of Mathematics</p>
                            <p class="card-text">Ph.D. in Mathematics with expertise in Algebra</p>
                            <div class="social-links">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card faculty-card text-center">
                        <div class="card-body">
                            <img src="https://via.placeholder.com/200" alt="Prof. Meera Gupta" class="faculty-img">
                            <h4 class="card-title">Prof. Meera Gupta</h4>
                            <p class="text-muted">Mathematics Professor</p>
                            <p class="card-text">M.Sc. in Mathematics with specialization in Calculus</p>
                            <div class="social-links">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card faculty-card text-center">
                        <div class="card-body">
                            <img src="https://via.placeholder.com/200" alt="Dr. Arun Singh" class="faculty-img">
                            <h4 class="card-title">Dr. Arun Singh</h4>
                            <p class="text-muted">Mathematics Professor</p>
                            <p class="card-text">Ph.D. in Applied Mathematics</p>
                            <div class="social-links">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Humanities Department -->
    <section class="department-section bg-light">
        <div class="container">
            <h2 class="text-center department-title">Humanities Department</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card faculty-card text-center">
                        <div class="card-body">
                            <img src="https://via.placeholder.com/200" alt="Dr. Neha Sharma" class="faculty-img">
                            <h4 class="card-title">Akshay singh</h4>
                            <p class="text-muted">Head of Humanities</p>
                            <p class="card-text">Ph.D. in English Literature with 12 years of experience</p>
                            <div class="social-links">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card faculty-card text-center">
                        <div class="card-body">
                            <img src="https://via.placeholder.com/200" alt="Prof. Rahul Mehta" class="faculty-img">
                            <h4 class="card-title">Prof. Rahul Mehta</h4>
                            <p class="text-muted">History Professor</p>
                            <p class="card-text">M.A. in History with specialization in Indian History</p>
                            <div class="social-links">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card faculty-card text-center">
                        <div class="card-body">
                            <img src="https://via.placeholder.com/200" alt="Dr. Anjali Desai" class="faculty-img">
                            <h4 class="card-title">Dr. Anjali Desai</h4>
                            <p class="text-muted">Geography Professor</p>
                            <p class="card-text">Ph.D. in Geography with expertise in Physical Geography</p>
                            <div class="social-links">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>123 Education Street<br>City, State 12345<br>Phone: (123) 456-7890<br>Email: info@modernschool.com</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="admission.html" class="text-white">Admission Process</a></li>
                        <li><a href="#" class="text-white">Academic Calendar</a></li>
                        <li><a href="#" class="text-white">Events</a></li>
                        <li><a href="#" class="text-white">News & Updates</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <div class="social-links">
                        <a href="#" class="text-white me-2">Facebook</a>
                        <a href="#" class="text-white me-2">Twitter</a>
                        <a href="#" class="text-white">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html> 