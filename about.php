<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <style>
        .hero-section {
            position: relative;
            min-height: 60vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('gr.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 4rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .story-image {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .story-image img {
            transition: transform 0.5s ease;
        }

        .story-image:hover img {
            transform: scale(1.05);
        }

        .story-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            color: white;
            padding: 15px 25px;
            border-radius: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .mission-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .mission-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .mission-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .mission-card:hover .mission-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .value-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
            text-align: center;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .value-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.8rem;
            transition: all 0.3s ease;
        }

        .value-card:hover .value-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .timeline {
            position: relative;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, #0d6efd, #0dcaf0);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
        }

        .timeline-content {
            width: calc(50% - 30px);
            padding: 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
        }

        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: auto;
        }

        .timeline-dot {
            width: 20px;
            height: 20px;
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            border-radius: 50%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 2rem;
        }

        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .testimonial-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .quote-icon {
            color: #0d6efd;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .section-title {
            position: relative;
            margin-bottom: 3rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #0d6efd, #0dcaf0);
            border-radius: 2px;
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
                        <a class="nav-link active" href="about.html">About</a>
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

    <!-- About Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row min-vh-60 align-items-center">
                <div class="col-lg-8 text-white hero-content">
                    <h1 class="hero-title animate__animated animate__fadeInUp">About Modern School</h1>
                    <p class="hero-subtitle animate__animated animate__fadeInUp animate__delay-1s">Excellence in Education since 1990</p>
                    <div class="animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#story" class="btn btn-primary btn-lg me-3">Our Story</a>
                        <a href="#mission" class="btn btn-outline-light btn-lg">Mission & Vision</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section id="story" class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="story-image">
                        <img src="gr.jpg" alt="School Building" class="img-fluid">
                        <div class="story-badge">
                            30+ Years of Excellence
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title text-center">Our Story</h2>
                    <p class="lead mb-4">Founded in 1990, Modern School has been at the forefront of educational excellence for over three decades.</p>
                    <p class="mb-4">We believe in providing a holistic education that combines academic rigor with character development, creativity, and innovation.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="value-icon me-3">
                                    <i class="fas fa-medal"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Academic Excellence</h5>
                                    <p class="mb-0 text-muted">Consistently high performance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="value-icon me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Expert Faculty</h5>
                                    <p class="mb-0 text-muted">Highly qualified teachers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section id="mission" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Our Mission & Vision</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="text-center mb-4">Our Mission</h3>
                        <p class="text-center">To provide quality education that nurtures intellectual growth, fosters creativity, and develops responsible global citizens.</p>
                        <ul class="list-unstyled mt-4">
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>Academic Excellence
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>Character Development
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>Global Perspective
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="text-center mb-4">Our Vision</h3>
                        <p class="text-center">To be a leading educational institution that sets standards of excellence in holistic education and character development.</p>
                        <ul class="list-unstyled mt-4">
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>Innovation in Education
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>Leadership Development
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>Community Impact
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Our Core Values</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Excellence</h4>
                        <p>Striving for the highest standards in everything we do.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Integrity</h4>
                        <p>Maintaining honesty and ethical principles in all actions.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Community</h4>
                        <p>Fostering a supportive and inclusive environment.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Innovation</h4>
                        <p>Embracing new ideas and approaches to learning.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Our Journey</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>1990</h4>
                        <p>Modern School was established with a vision to provide quality education.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>2000</h4>
                        <p>Expanded facilities and introduced new academic programs.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>2010</h4>
                        <p>Achieved recognition for academic excellence and student development.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>2020</h4>
                        <p>Implemented modern teaching methods and digital learning platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">What Parents Say</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="mb-4">"Modern School has provided an excellent learning environment for my child. The teachers are dedicated and the facilities are outstanding."</p>
                        <div class="d-flex align-items-center">
                            <img src="mhr.jpg" alt="Parent" class="testimonial-image">
                            <div class="ms-3">
                                <h5 class="mb-1">Mrs. Sarah Johnson</h5>
                                <p class="mb-0 text-muted">Parent of Class 10 Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="mb-4">"The school's focus on holistic development has helped my child grow not just academically, but as a well-rounded individual."</p>
                        <div class="d-flex align-items-center">
                            <img src="asj.jpg" alt="Parent" class="testimonial-image">
                            <div class="ms-3">
                                <h5 class="mb-1">Mr. David Chen</h5>
                                <p class="mb-0 text-muted">Parent of Class 8 Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="mb-4">"The innovative teaching methods and supportive environment have made learning enjoyable for my child."</p>
                        <div class="d-flex align-items-center">
                            <img src="hl.jpg" alt="Parent" class="testimonial-image">
                            <div class="ms-3">
                                <h5 class="mb-1">Mrs. Priya Sharma</h5>
                                <p class="mb-0 text-muted">Parent of Class 12 Student</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>