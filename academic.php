<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern School - Premier Science Education for 11th and 12th Grade Students">
    <meta name="keywords" content="science education, physics, chemistry, biology, mathematics, 11th grade, 12th grade, JEE, NEET">
    <meta name="author" content="Modern School">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://modernschool.edu/academic">
    <meta property="og:title" content="Modern School - Academic Programs">
    <meta property="og:description" content="Discover our comprehensive academic programs designed to nurture young minds and prepare students for future success.">
    <meta property="og:image" content="images/academic.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://modernschool.edu/academic">
    <meta property="twitter:title" content="Modern School - Academic Programs">
    <meta property="twitter:description" content="Discover our comprehensive academic programs designed to nurture young minds and prepare students for future success.">
    <meta property="twitter:image" content="images/academic.jpg">

    <title>Science Education - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('gr.jpg');
            background-size: cover;
            background-position: center;
            min-height: 60vh;
            position: relative;
        }

        .science-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .science-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .science-icon {
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

        .science-card:hover .science-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .lab-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 4rem 0;
        }

        .lab-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .lab-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .lab-image {
            height: 200px;
            overflow: hidden;
        }

        .lab-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .lab-card:hover .lab-image img {
            transform: scale(1.1);
        }

        .achievement-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
        }

        .feature-list li {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .feature-list li i {
            color: #0d6efd;
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        .exam-prep-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .exam-prep-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .exam-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .curriculum-highlight {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 2rem;
            border-radius: 15px;
            margin: 1rem 0;
        }

        .research-project {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin: 1rem 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
                        <a class="nav-link active" href="academic.html">Academic</a>
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row min-vh-60 align-items-center">
                <div class="col-lg-8 text-white">
                    <h1 class="display-3 fw-bold mb-4">Excellence in Science Education</h1>
                    <p class="lead mb-4">Comprehensive Science Programs for 11th & 12th Grade Students</p>
                    <div class="d-flex gap-3">
                        <a href="#programs" class="btn btn-primary btn-lg">Explore Programs</a>
                        <a href="admission.html" class="btn btn-outline-light btn-lg">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Science Programs Section -->
    <section id="programs" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Comprehensive Science Curriculum</h2>
                <p class="lead text-muted">Advanced Science Education for Future Scientists and Medical Professionals</p>
                </div>
                    <div class="row g-4">
                <div class="col-md-4">
                    <div class="science-card">
                        <div class="science-icon">
                            <i class="fas fa-atom"></i>
                        </div>
                        <h3 class="text-center mb-4">Physics</h3>
                        <ul class="feature-list list-unstyled">
                            <li><i class="fas fa-check-circle"></i> Mechanics & Thermodynamics</li>
                            <li><i class="fas fa-check-circle"></i> Electromagnetism & Optics</li>
                            <li><i class="fas fa-check-circle"></i> Modern Physics & Quantum Mechanics</li>
                            <li><i class="fas fa-check-circle"></i> Advanced Lab Experiments</li>
                            <li><i class="fas fa-check-circle"></i> JEE Main & Advanced Preparation</li>
                                    </ul>
                                </div>
                            </div>
                <div class="col-md-4">
                    <div class="science-card">
                        <div class="science-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3 class="text-center mb-4">Chemistry</h3>
                        <ul class="feature-list list-unstyled">
                            <li><i class="fas fa-check-circle"></i> Physical & Chemical Kinetics</li>
                            <li><i class="fas fa-check-circle"></i> Organic & Inorganic Chemistry</li>
                            <li><i class="fas fa-check-circle"></i> Chemical Bonding & Structure</li>
                            <li><i class="fas fa-check-circle"></i> Advanced Lab Techniques</li>
                            <li><i class="fas fa-check-circle"></i> NEET & JEE Preparation</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="science-card">
                        <div class="science-icon">
                            <i class="fas fa-dna"></i>
                        </div>
                        <h3 class="text-center mb-4">Biology</h3>
                        <ul class="feature-list list-unstyled">
                            <li><i class="fas fa-check-circle"></i> Cell Biology & Genetics</li>
                            <li><i class="fas fa-check-circle"></i> Human Physiology & Anatomy</li>
                            <li><i class="fas fa-check-circle"></i> Evolution & Ecology</li>
                            <li><i class="fas fa-check-circle"></i> Biotechnology & Research</li>
                            <li><i class="fas fa-check-circle"></i> NEET Preparation</li>
                                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Curriculum Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Advanced Science Curriculum</h2>
                <p class="lead text-muted">Specialized Programs for 11th & 12th Grade Science Students</p>
                </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                    <div class="curriculum-highlight">
                        <h3 class="mb-4">11th Grade Science Stream</h3>
                                    <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-book-open text-primary me-2"></i>Comprehensive Physics with Calculus</li>
                            <li class="mb-3"><i class="fas fa-flask text-primary me-2"></i>Advanced Chemistry with Lab Work</li>
                            <li class="mb-3"><i class="fas fa-dna text-primary me-2"></i>Cell Biology & Genetics</li>
                            <li class="mb-3"><i class="fas fa-calculator text-primary me-2"></i>Advanced Mathematics</li>
                            <li class="mb-3"><i class="fas fa-laptop-code text-primary me-2"></i>Computer Science (Optional)</li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                    <div class="curriculum-highlight">
                        <h3 class="mb-4">12th Grade Science Stream</h3>
                                    <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-atom text-primary me-2"></i>Modern Physics & Quantum Mechanics</li>
                            <li class="mb-3"><i class="fas fa-vial text-primary me-2"></i>Organic & Inorganic Chemistry</li>
                            <li class="mb-3"><i class="fas fa-brain text-primary me-2"></i>Human Physiology & Evolution</li>
                            <li class="mb-3"><i class="fas fa-chart-line text-primary me-2"></i>Statistics & Probability</li>
                            <li class="mb-3"><i class="fas fa-project-diagram text-primary me-2"></i>Research Projects</li>
                                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Laboratory Facilities -->
    <section class="lab-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">State-of-the-Art Laboratories</h2>
                <p class="lead text-muted">Advanced Facilities for Practical Learning and Research</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="lab-card">
                        <div class="lab-image">
                            <img src="hl.jpg" alt="Physics Lab">
                            <div class="achievement-badge">Advanced</div>
                        </div>
                        <div class="p-4">
                            <h4>Physics Laboratory</h4>
                            <p>Equipped with modern instruments for advanced physics experiments and research.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Digital Oscilloscopes</li>
                                <li><i class="fas fa-check text-success me-2"></i>Laser Systems & Optics Kit</li>
                                <li><i class="fas fa-check text-success me-2"></i>Advanced Sensors & Data Loggers</li>
                                <li><i class="fas fa-check text-success me-2"></i>Quantum Physics Equipment</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="lab-card">
                        <div class="lab-image">
                            <img src="asj.jpg" alt="Chemistry Lab">
                            <div class="achievement-badge">Modern</div>
                        </div>
                        <div class="p-4">
                            <h4>Chemistry Laboratory</h4>
                            <p>State-of-the-art facilities for chemical analysis and synthesis experiments.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Analytical Instruments</li>
                                <li><i class="fas fa-check text-success me-2"></i>Advanced Safety Equipment</li>
                                <li><i class="fas fa-check text-success me-2"></i>Chemical Storage & Fume Hoods</li>
                                <li><i class="fas fa-check text-success me-2"></i>Spectrophotometers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="lab-card">
                        <div class="lab-image">
                            <img src="mhr.jpg" alt="Biology Lab">
                            <div class="achievement-badge">Professional</div>
                        </div>
                        <div class="p-4">
                            <h4>Biology Laboratory</h4>
                            <p>Advanced equipment for biological research and practical experiments.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Advanced Microscopes</li>
                                <li><i class="fas fa-check text-success me-2"></i>DNA Analysis Tools</li>
                                <li><i class="fas fa-check text-success me-2"></i>Specimen Collection</li>
                                <li><i class="fas fa-check text-success me-2"></i>Biotechnology Equipment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Projects Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Research & Innovation</h2>
                <p class="lead text-muted">Hands-on Research Experience for Science Students</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="research-project">
                        <h4><i class="fas fa-microscope text-primary me-2"></i>Laboratory Research</h4>
                        <p>Students conduct independent research projects under faculty guidance, developing practical skills and scientific thinking.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-success me-2"></i>Design and execute experiments</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Data collection and analysis</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Research paper writing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="research-project">
                        <h4><i class="fas fa-laptop-code text-primary me-2"></i>Innovation Projects</h4>
                        <p>Students work on innovative projects combining multiple science disciplines to solve real-world problems.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-success me-2"></i>Interdisciplinary research</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Technology integration</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Project presentation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Exam Preparation -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Competitive Exam Preparation</h2>
                <p class="lead text-muted">Specialized Coaching for JEE & NEET</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="exam-prep-card">
                        <div class="exam-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>JEE Preparation</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-success me-2"></i>Comprehensive Physics & Mathematics</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Advanced Problem Solving</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Regular Mock Tests</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Expert Faculty Guidance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="exam-prep-card">
                        <div class="exam-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4>NEET Preparation</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-success me-2"></i>Biology & Chemistry Focus</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Anatomy & Physiology</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Regular Practice Tests</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Medical Expert Guidance</li>
                        </ul>
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
                    <p>Developed by coding Classes and his team</p>
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