<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern School - A leading educational institution committed to excellence in education, fostering innovation, and shaping future leaders.">
    <meta name="keywords" content="school, education, modern school, academic excellence, student development">
    <meta name="author" content="Modern School">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://modernschool.edu/features">
    <meta property="og:title" content="Modern School - Features & Facilities">
    <meta property="og:description" content="Explore the modern facilities and features that make Modern School a leading educational institution.">
    <meta property="og:image" content="images/modern-facilities.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://modernschool.edu/features">
    <meta property="twitter:title" content="Modern School - Features & Facilities">
    <meta property="twitter:description" content="Explore the modern facilities and features that make Modern School a leading educational institution.">
    <meta property="twitter:image" content="images/modern-facilities.jpg">

    <title>Features - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <style>
        .feature-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .feature-icon {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 20px;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
        }
        .facility-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
        }
        .section-title {
            position: relative;
            margin-bottom: 50px;
            padding-bottom: 20px;
        }
        .section-title:after {
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
                        <a class="nav-link" href="faculty.html">Faculty</a>
                        <div class="nav-preview">
                            <div class="preview-title">Our Faculty</div>
                            <div class="preview-content">Meet our experienced and dedicated teaching staff who are committed to student success.</div>
                            <a href="faculty.html" class="preview-link">Meet Faculty <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="features.html">Features</a>
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
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 mb-4">State-of-the-Art Facilities</h1>
            <p class="lead">Discover our world-class infrastructure and modern amenities</p>
        </div>
    </section>

    <!-- Key Features -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Key Features</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-laptop feature-icon"></i>
                            <h4 class="card-title">Smart Classrooms</h4>
                            <p class="card-text">Equipped with interactive whiteboards, projectors, and digital learning tools for enhanced education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-flask feature-icon"></i>
                            <h4 class="card-title">Advanced Laboratories</h4>
                            <p class="card-text">State-of-the-art science and computer labs with modern equipment and facilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-book-reader feature-icon"></i>
                            <h4 class="card-title">Digital Library</h4>
                            <p class="card-text">Extensive collection of books, e-resources, and study materials for comprehensive learning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Expert Teachers</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Happy Students</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">20+</div>
                        <div class="stat-label">Sports Facilities</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Our Facilities</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="flg.jpg" alt="Sports Complex" class="facility-img">
                    <h4>15th August</h4>
                    <p>Multiple sports grounds, indoor courts, and fitness facilities for comprehensive physical development.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="pic.jpg" alt="Library" class="facility-img">
                    <h4>Events</h4>
                    <p>Spacious library with digital resources, study areas, and a vast collection of books.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="std.jpg" alt="Cafeteria" class="facility-img">
                    <h4>Cafeteria</h4>
                    <p>Hygienic and spacious cafeteria serving nutritious meals and snacks.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Features -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">Additional Features</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-bus feature-icon me-3"></i>
                                <div>
                                    <h4>Transportation</h4>
                                    <p>Safe and comfortable bus service covering all major areas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-first-aid feature-icon me-3"></i>
                                <div>
                                    <h4>Medical Room</h4>
                                    <p>24/7 medical assistance with qualified staff and first-aid facilities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-theater-masks feature-icon me-3"></i>
                                <div>
                                    <h4>Auditorium</h4>
                                    <p>State-of-the-art auditorium for events, performances, and assemblies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-shield-alt feature-icon me-3"></i>
                                <div>
                                    <h4>Security</h4>
                                    <p>24/7 security with CCTV surveillance and trained personnel.</p>
                                </div>
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