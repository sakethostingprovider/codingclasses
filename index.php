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
    <meta property="og:url" content="https://modernschool.edu/">
    <meta property="og:title" content="Modern School - Excellence in Education">
    <meta property="og:description" content="A leading educational institution committed to excellence in education, fostering innovation, and shaping future leaders.">
    <meta property="og:image" content="images/school-building.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://modernschool.edu/">
    <meta property="twitter:title" content="Modern School - Excellence in Education">
    <meta property="twitter:description" content="A leading educational institution committed to excellence in education, fostering innovation, and shaping future leaders.">
    <meta property="twitter:image" content="images/school-building.jpg">

    <title>Modern School - Excellence in Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            overflow-x: hidden;
        }

        /* Custom Variables */
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
            --text-color: #2c3e50;
            --light-bg: #f8fafc;
            --dark-bg: #1e293b;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --error-color: #ef4444;
            --transition: all 0.3s ease;
        }

        /* Header and Navigation */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }

        header.scrolled {
            padding: 0.5rem 0;
            background-color: rgba(255, 255, 255, 0.98);
        }

        .navbar {
            padding: 1rem 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .navbar-brand img {
            height: 40px;
            width: auto;
        }

        .nav-link {
            color: var(--text-color);
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: var(--transition);
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary-color);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('gr.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            color: #fff;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeInUp 1s ease;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.2s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            animation: fadeInUp 1s ease 0.4s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.3);
        }

        .btn-outline-light {
            border: 2px solid #fff;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-outline-light:hover {
            background-color: #fff;
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Sections */
        section {
            padding: 6rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 1rem;
        }

        .section-title p {
            color: #64748b;
            font-size: 1.1rem;
        }

        /* Feature Cards */
        .feature-card {
            background: #fff;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: var(--transition);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .feature-icon i {
            font-size: 1.5rem;
            color: #fff;
        }

        /* News Cards */
        .news-card {
            background: #fff;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: var(--transition);
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .news-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .news-card:hover .news-image img {
            transform: scale(1.1);
        }

        .news-content {
            padding: 1.5rem;
        }

        .news-meta {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .news-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        /* Testimonial Cards */
        .testimonial-card {
            background: #fff;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: var(--transition);
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .quote-icon {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .author-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Contact Form */
        .contact-form {
            background: #fff;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .form-control {
            border: 2px solid #e2e8f0;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .feature-card {
                margin-bottom: 1.5rem;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-color);
        }

        /* Loading Animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="grlg.jpg" alt="Modern School Logo" height="50">
                <span>Modern School</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                        <div class="nav-preview">
                            <div class="preview-title">Welcome to Modern School</div>
                            <div class="preview-content">Experience excellence in education with our comprehensive learning programs and state-of-the-art facilities.</div>
                            <a href="index.php" class="preview-link">Explore Homepage <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                        <div class="nav-preview">
                            <div class="preview-title">About Our School</div>
                            <div class="preview-content">Learn about our 30+ years of excellence in education, our mission, and our commitment to student success.</div>
                            <a href="about.php" class="preview-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="academic.php">Academic</a>
                        <div class="nav-preview">
                            <div class="preview-title">Academic Programs</div>
                            <div class="preview-content">Discover our comprehensive curriculum, specialized courses, and academic achievements.</div>
                            <a href="academic.php" class="preview-link">View Programs <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faculty.php">Faculty</a>
                        <div class="nav-preview">
                            <div class="preview-title">Our Faculty jhgjygjttyt</div>
                            <div class="preview-content">Meet our experienced and dedicated teaching staff who are committed to student success.</div>
                            <a href="faculty.html" class="preview-link">Meet Faculty <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="features.php">Features</a>
                        <div class="nav-preview">
                            <div class="preview-title">School Features</div>
                            <div class="preview-content">Explore our modern facilities, sports complex, laboratories, and other amenities.</div>
                            <a href="features.php" class="preview-link">View Features <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                        <div class="nav-preview">
                            <div class="preview-title">Latest News</div>
                            <div class="preview-content">Stay updated with the latest happenings, events, and achievements at Modern School.</div>
                            <a href="news.php" class="preview-link">Read News <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                        <div class="nav-preview">
                            <div class="preview-title">Contact Us</div>
                            <div class="preview-content">Get in touch with us for admissions, inquiries, or to schedule a campus visit.</div>
                            <a href="contact.php" class="preview-link">Contact Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admission.php">Admission</a>
                        <div class="nav-preview">
                            <div class="preview-title">Admission Process</div>
                            <div class="preview-content">Learn about our admission process, requirements, and important dates.</div>
                            <a href="admission.php" class="preview-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="student-login.php">Student Login</a>
                        <div class="nav-preview">
                            <div class="preview-title">Student Portal</div>
                            <div class="preview-content">Access your academic records, assignments, and school resources.</div>
                            <a href="student-login.php" class="preview-link">Login Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section position-relative">
        <div class="hero-overlay position-relative">
            <div class="hero-gradient"></div>
            <img src="gr.jpg" alt="School Building" class="img-fluid w-100">
        </div>
        <div class="container position-relative">
            <div class="row min-vh-75 align-items-center">
                <div class="col-lg-8 text-white">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInUp">Welcome to Modern School</h1>
                    <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Empowering minds, shaping futures, and building tomorrow's leaders through innovative education and holistic development.</p>
                    <div class="animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="admission.html" class="btn btn-primary btn-lg me-3">Begin Your Journey</a>
                        <a href="#about" class="btn btn-outline-light btn-lg">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Our Legacy of Excellence</h2>
                <div class="title-underline mx-auto my-4"></div>
                <p class="lead text-muted">Where tradition meets innovation in education</p>
            </div>
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="position-relative about-image-card">
                        <img src="gr.jpg" alt="School Building" class="img-fluid rounded-3 shadow-lg">
                        <div class="position-absolute top-0 start-0 bg-primary text-white p-4 rounded-3 m-3 about-badge">
                            <h3 class="mb-0 display-4 fw-bold">30+</h3>
                            <p class="mb-0">Years of Excellence</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <h3 class="mb-4 fw-bold">A Tradition of Academic Excellence</h3>
                        <p class="lead mb-4">Since 1990, Modern School has been a beacon of educational excellence, nurturing generations of successful individuals who have gone on to make significant contributions in various fields.</p>
                        <p class="mb-4">Our commitment to providing a comprehensive education that combines academic rigor with character development, creativity, and innovation sets us apart.</p>
                        
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="feature-card d-flex align-items-center p-3 rounded-3 shadow-sm">
                                    <div class="feature-icon bg-primary bg-gradient text-white rounded-3 me-3">
                                        <i class="fas fa-medal"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Academic Excellence</h5>
                                        <p class="mb-0 text-muted">Consistent top performance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card d-flex align-items-center p-3 rounded-3 shadow-sm">
                                    <div class="feature-icon bg-primary bg-gradient text-white rounded-3 me-3">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Expert Faculty</h5>
                                        <p class="mb-0 text-muted">World-class educators</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card d-flex align-items-center p-3 rounded-3 shadow-sm">
                                    <div class="feature-icon bg-primary bg-gradient text-white rounded-3 me-3">
                                        <i class="fas fa-flask"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Modern Facilities</h5>
                                        <p class="mb-0 text-muted">State-of-the-art infrastructure</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card d-flex align-items-center p-3 rounded-3 shadow-sm">
                                    <div class="feature-icon bg-primary bg-gradient text-white rounded-3 me-3">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Holistic Development</h5>
                                        <p class="mb-0 text-muted">Complete student growth</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="admission.php" class="btn btn-primary btn-lg">Join Our Community</a>
                            <a href="contact.php" class="btn btn-outline-primary btn-lg">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Section -->
    <section id="academic" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Academic Excellence</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="hl.jpg" alt="Academic" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Comprehensive Learning Programs</h3>
                    <p class="lead">Our curriculum is designed to challenge and inspire students, preparing them for success in higher education and beyond.</p>
                    <p>We offer a diverse range of academic programs that cater to different learning styles and aspirations, ensuring every student reaches their full potential.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>Advanced STEM programs
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>Comprehensive humanities courses
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>Innovative teaching methods
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Why Choose Modern School</h2>
                <div class="title-underline mx-auto my-4"></div>
                <p class="lead text-muted">Experience the difference of a world-class education</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="h4">Excellence in Education</h3>
                            <p>Our commitment to academic excellence is reflected in our students' outstanding performance and achievements.</p>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Proven track record</li>
                                <li><i class="fas fa-check-circle"></i> Innovative teaching methods</li>
                                <li><i class="fas fa-check-circle"></i> Regular assessments</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="h4">Expert Faculty</h3>
                            <p>Our teachers are passionate educators dedicated to nurturing young minds and fostering a love for learning.</p>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Highly qualified teachers</li>
                                <li><i class="fas fa-check-circle"></i> Continuous professional development</li>
                                <li><i class="fas fa-check-circle"></i> Personalized attention</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-flask"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="h4">Modern Facilities</h3>
                            <p>State-of-the-art infrastructure providing the perfect environment for learning and growth.</p>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Advanced laboratories</li>
                                <li><i class="fas fa-check-circle"></i> Smart classrooms</li>
                                <li><i class="fas fa-check-circle"></i> Sports complex</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Events Section -->
    <section id="news" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Latest Updates</h2>
                <div class="title-underline mx-auto my-4"></div>
                <p class="lead text-muted">Stay connected with our latest achievements and upcoming events</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="news-card">
                                <div class="news-image">
                                    <img src="plc.jpg" alt="News 1">
                                    <div class="news-date">
                                        <span class="day">15</span>
                                        <span class="month">Mar</span>
                                    </div>
                                </div>
                                <div class="news-content">
                                    <div class="news-meta">
                                        <span class="badge bg-primary bg-opacity-10 text-primary">Sports</span>
                                        <span class="text-muted"><i class="far fa-clock me-1"></i> 2 days ago</span>
                                    </div>
                                    <h3 class="news-title">Annual Sports Day 2024</h3>
                                    <p class="news-excerpt">Join us for a day of athletic excellence and school spirit at our annual sports celebration.</p>
                                    <button class="btn btn-link p-0 text-primary" data-bs-toggle="modal" data-bs-target="#newsModal1">
                                        Read More <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-card">
                                <div class="news-image">
                                    <img src="plc1.jpg" alt="News 2">
                                    <div class="news-date">
                                        <span class="day">12</span>
                                        <span class="month">Mar</span>
                                    </div>
                                </div>
                                <div class="news-content">
                                    <div class="news-meta">
                                        <span class="badge bg-success bg-opacity-10 text-success">Achievement</span>
                                        <span class="text-muted"><i class="far fa-clock me-1"></i> 5 days ago</span>
                                    </div>
                                    <h3 class="news-title">Science Fair Champions</h3>
                                    <p class="news-excerpt">Our students showcase exceptional talent at the regional science fair competition.</p>
                                    <button class="btn btn-link p-0 text-primary" data-bs-toggle="modal" data-bs-target="#newsModal2">
                                        Read More <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="events-card">
                        <div class="events-header">
                            <h4 class="mb-0">Upcoming Events</h4>
                        </div>
                        <div class="events-body">
                            <div class="event-item">
                                <div class="event-date">
                                    <span class="day">20</span>
                                    <span class="month">Mar</span>
                                </div>
                                <div class="event-details">
                                    <h5>Parent-Teacher Meeting</h5>
                                    <p class="mb-0">Annual progress review</p>
                                </div>
                            </div>
                            <div class="event-item">
                                <div class="event-date">
                                    <span class="day">25</span>
                                    <span class="month">Mar</span>
                                </div>
                                <div class="event-details">
                                    <h5>Annual Day Celebration</h5>
                                    <p class="mb-0">Cultural performances and awards</p>
                                </div>
                            </div>
                            <div class="event-item">
                                <div class="event-date">
                                    <span class="day">05</span>
                                    <span class="month">Apr</span>
                                </div>
                                <div class="event-details">
                                    <h5>School Picnic</h5>
                                    <p class="mb-0">Annual recreational trip</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Parent Testimonials</h2>
                <div class="title-underline mx-auto my-4"></div>
                <p class="lead text-muted">Hear from our community about their experience with Modern School</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <blockquote>
                                <p>"The dedication of teachers and the quality of education at Modern School is exceptional. My child's growth has been remarkable."</p>
                            </blockquote>
                        </div>
                        <div class="testimonial-author">
                            <img src="mhr.jpg" alt="Sarah Johnson" class="author-image">
                            <div class="author-info">
                                <h5 class="mb-0">Mrs. Sarah Johnson</h5>
                                <p class="mb-0 text-muted">Parent of Class 10 Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <blockquote>
                                <p>"The school's focus on both academics and character development has helped shape my child into a well-rounded individual."</p>
                            </blockquote>
                        </div>
                        <div class="testimonial-author">
                            <img src="asj.jpg" alt="David Chen" class="author-image">
                            <div class="author-info">
                                <h5 class="mb-0">Mr. David Chen</h5>
                                <p class="mb-0 text-muted">Parent of Class 8 Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <blockquote>
                                <p>"Modern School's innovative teaching methods and supportive environment have helped my child excel in both academics and extracurricular activities."</p>
                            </blockquote>
                        </div>
                        <div class="testimonial-author">
                            <img src="hl.jpg" alt="Priya Sharma" class="author-image">
                            <div class="author-info">
                                <h5 class="mb-0">Mrs. Priya Sharma</h5>
                                <p class="mb-0 text-muted">Parent of Class 12 Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Contact Us</h2>
                <div class="title-underline mx-auto my-4"></div>
                <p class="lead text-muted">Get in touch with us for any inquiries or to schedule a visit</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact-form-card shadow-lg rounded-4 p-4 bg-white position-relative">
                        <div class="position-absolute top-0 end-0 bg-primary bg-opacity-10 p-3 rounded-bl-4">
                            <i class="fas fa-envelope-open-text text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-4 fw-bold text-primary">Send us a Message</h4>
                        <div class="alert alert-info mb-4 border-0 shadow-sm d-flex align-items-center">
                            <i class="fas fa-info-circle me-2 fa-lg text-primary"></i>
                            <span>Your message will be sent directly to our school administration for prompt response.</span>
                        </div>
                        <form id="contactForm" onsubmit="return handleContactSubmit(event)">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border-2 rounded-3" id="name" name="name" 
                                       placeholder="Enter your full name" required>
                                <label for="name"><i class="fas fa-user me-2 text-primary"></i>Your Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control border-2 rounded-3" id="email" name="email" 
                                       placeholder="Enter your email address" required>
                                <label for="email"><i class="fas fa-envelope me-2 text-primary"></i>Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control border-2 rounded-3" id="mobile" name="mobile" 
                                       pattern="[0-9]{10}" maxlength="10" 
                                       placeholder="Enter 10-digit mobile number" required>
                                <label for="mobile"><i class="fas fa-phone me-2 text-primary"></i>Mobile Number</label>
                                <div class="form-text text-primary"><i class="fas fa-info-circle me-1"></i>Please enter a valid 10-digit mobile number</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select border-2 rounded-3" id="subject" name="subject" required>
                                    <option value="" disabled selected>Choose a subject</option>
                                    <option value="Admission Inquiry">Admission Inquiry</option>
                                    <option value="Academic Information">Academic Information</option>
                                    <option value="Fee Structure">Fee Structure</option>
                                    <option value="Campus Visit">Schedule Campus Visit</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="subject"><i class="fas fa-tag me-2 text-primary"></i>Subject</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control border-2 rounded-3" id="message" name="message" 
                                          style="height: 150px" placeholder="Type your message here..." required></textarea>
                                <label for="message"><i class="fas fa-comment-alt me-2 text-primary"></i>Message</label>
                            </div>
                            <div class="alert alert-success shadow-sm border-0" id="successAlert" style="display: none;">
                                <i class="fas fa-check-circle me-2"></i><span></span>
                            </div>
                            <div class="alert alert-danger shadow-sm border-0" id="errorAlert" style="display: none;">
                                <i class="fas fa-exclamation-circle me-2"></i><span></span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 py-3 shadow-sm rounded-3 position-relative" id="submitBtn">
                                <span class="position-relative z-1">
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info-card shadow-lg rounded-4 p-4 bg-white h-100">
                        <h4 class="mb-4 fw-bold text-primary">Contact Information</h4>
                        <div class="contact-info-item mb-4 p-3 rounded-3 bg-light shadow-sm hover-shadow transition">
                            <div class="d-flex align-items-center">
                                <div class="icon-wrapper me-3 bg-primary bg-opacity-10 p-3 rounded-circle">
                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="mb-1 fw-bold">Address</h5>
                                    <p class="mb-0">123 Education Street, City, Country</p>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info-item mb-4 p-3 rounded-3 bg-light shadow-sm hover-shadow transition">
                            <div class="d-flex align-items-center">
                                <div class="icon-wrapper me-3 bg-primary bg-opacity-10 p-3 rounded-circle">
                                    <i class="fas fa-phone text-primary"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="mb-1 fw-bold">Phone</h5>
                                    <p class="mb-0">+1 234 567 890</p>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info-item mb-4 p-3 rounded-3 bg-light shadow-sm hover-shadow transition">
                            <div class="d-flex align-items-center">
                                <div class="icon-wrapper me-3 bg-primary bg-opacity-10 p-3 rounded-circle">
                                    <i class="fas fa-envelope text-primary"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="mb-1 fw-bold">Email</h5>
                                    <p class="mb-0">admin@modernschool.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info-item mb-4 p-3 rounded-3 bg-light shadow-sm hover-shadow transition">
                            <div class="d-flex align-items-center">
                                <div class="icon-wrapper me-3 bg-primary bg-opacity-10 p-3 rounded-circle">
                                    <i class="fas fa-clock text-primary"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="mb-1 fw-bold">Office Hours</h5>
                                    <p class="mb-0">Monday - Friday: 8:00 AM - 5:00 PM</p>
                                    <p class="mb-0">Saturday: 9:00 AM - 1:00 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="social-links mt-4 d-flex justify-content-center gap-3">
                            <a href="#" class="social-link p-3 rounded-circle bg-primary text-white shadow-sm hover-shadow transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link p-3 rounded-circle bg-primary text-white shadow-sm hover-shadow transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link p-3 rounded-circle bg-primary text-white shadow-sm hover-shadow transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link p-3 rounded-circle bg-primary text-white shadow-sm hover-shadow transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
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
                <div class="col-md-6">
                    <h5>Modern School</h5>
                    <p>Excellence in Education since 1990</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; Developed by coding Classes and his team</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- News Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="newsModal1" tabindex="-1" aria-labelledby="newsModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4">
                    <div class="text-center mb-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Sports</span>
                        <h2 class="modal-title fw-bold" id="newsModalLabel1">Annual Sports Day 2024</h2>
                        <p class="text-muted">March 15, 2024</p>
                    </div>
                    <img src="plc.jpg" class="img-fluid rounded-3 mb-4 w-100" alt="Sports Day">
                    <div class="news-content">
                        <p class="lead">Modern School is excited to announce our Annual Sports Day 2024, a celebration of athletic excellence and school spirit.</p>
                        
                        <h5 class="mt-4 mb-3">Event Highlights</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Track and Field Competitions</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Team Sports Tournaments</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Individual Sports Events</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Special Performances</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Schedule</h5>
                        <p>The event will commence at 8:00 AM with the opening ceremony, followed by various competitions throughout the day. The closing ceremony and prize distribution will be held at 4:00 PM.</p>

                        <h5 class="mt-4 mb-3">Special Arrangements</h5>
                        <p>We have arranged for refreshments and seating for all parents and guardians. Medical staff will be present throughout the event to ensure the safety of all participants.</p>

                        <div class="alert alert-info mt-4">
                            <i class="fas fa-info-circle me-2"></i>
                            Parents are requested to arrive 30 minutes before the opening ceremony.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="newsModal2" tabindex="-1" aria-labelledby="newsModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4">
                    <div class="text-center mb-4">
                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Achievement</span>
                        <h2 class="modal-title fw-bold" id="newsModalLabel2">Science Fair Winners</h2>
                        <p class="text-muted">March 12, 2024</p>
                    </div>
                    <img src="plc1.jpg" class="img-fluid rounded-3 mb-4 w-100" alt="Science Fair">
                    <div class="news-content">
                        <p class="lead">We are proud to announce that our students have achieved remarkable success at the Regional Science Fair Competition 2024.</p>
                        
                        <h5 class="mt-4 mb-3">Award Winners</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-medal text-warning me-2"></i>First Prize - Environmental Science Project</li>
                            <li class="mb-2"><i class="fas fa-medal text-warning me-2"></i>Second Prize - Renewable Energy Innovation</li>
                            <li class="mb-2"><i class="fas fa-medal text-warning me-2"></i>Special Recognition - Robotics Project</li>
                        </ul>

                        <h5 class="mt-4 mb-3">Project Highlights</h5>
                        <p>Our students presented innovative projects focusing on sustainable development, renewable energy, and technological solutions for everyday problems. Their work demonstrated exceptional creativity and scientific understanding.</p>

                        <h5 class="mt-4 mb-3">Future Plans</h5>
                        <p>The winning projects will be displayed at the National Science Fair in June 2024. We are also planning to implement some of these innovative solutions within our school campus.</p>

                        <div class="alert alert-success mt-4">
                            <i class="fas fa-star me-2"></i>
                            Congratulations to all participants for their outstanding achievements!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        if (mobileMenuBtn && navLinks) {
            mobileMenuBtn.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                mobileMenuBtn.classList.toggle('active');
            });
        }

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Contact form handling
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalBtnText = submitBtn.textContent;
                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;

                try {
                    const formData = new FormData(this);
                    const response = await fetch('api/contact.php', {
                        method: 'POST',
                        body: formData
                    });

                    const result = await response.json();
                    
                    if (result.success) {
                        showNotification('Message sent successfully!', 'success');
                        this.reset();
                    } else {
                        showNotification(result.message || 'Failed to send message. Please try again.', 'error');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    showNotification('An error occurred. Please try again later.', 'error');
                } finally {
                    submitBtn.textContent = originalBtnText;
                    submitBtn.disabled = false;
                }
            });
        }

        // Notification system
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            // Trigger animation
            setTimeout(() => notification.classList.add('show'), 10);
            
            // Remove notification after 5 seconds
            setTimeout(() => {
                notification.classList.remove('show');
                setTimeout(() => notification.remove(), 300);
            }, 5000);
        }

        // Image lazy loading
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                img.src = img.dataset.src;
            });
        } else {
            // Fallback for browsers that don't support lazy loading
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
            document.body.appendChild(script);
        }

        // Add animation on scroll
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementBottom = element.getBoundingClientRect().bottom;
                
                if (elementTop < window.innerHeight && elementBottom > 0) {
                    element.classList.add('visible');
                }
            });
        };

        // Initial check for elements in view
        animateOnScroll();
        
        // Check for elements in view on scroll
        window.addEventListener('scroll', animateOnScroll);
    });
    </script>
</body>
</html> 