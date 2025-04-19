<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="navbar.css">
    <style>
        :root {
            --primary-color: #0a2472;
            --secondary-color: #1e40af;
            --accent-color: #0dcaf0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            padding: 15px 0;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #0a2472 0%, #1e3a8a 50%, #1e40af 100%) !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff !important;
            display: flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            padding: 5px 15px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
        }
        
        .navbar-brand img {
            transition: all 0.3s ease;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
            border-radius: 50%;
            padding: 5px;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .navbar-brand:hover img {
            transform: scale(1.05) rotate(5deg);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            padding: 8px 16px !important;
            margin: 0 5px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: visible;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #60a5fa, #3b82f6);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::before {
            width: 80%;
        }
        
        .nav-link:hover {
            color: #fff !important;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .nav-link.active {
            background: rgba(255, 255, 255, 0.15);
            color: #fff !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .nav-preview {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            margin-top: 10px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-preview::before {
            content: '';
            position: absolute;
            top: -8px;
            left: 50%;
            transform: translateX(-50%);
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 8px solid rgba(255, 255, 255, 0.95);
        }

        .nav-item:hover .nav-preview {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .preview-title {
            color: #1e40af;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .preview-content {
            color: #4b5563;
            font-size: 0.9rem;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .preview-link {
            color: #1e40af;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .preview-link:hover {
            color: #1e3a8a;
            gap: 8px;
        }
        
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
            background: rgba(255, 255, 255, 0.2);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: rgba(10, 36, 114, 0.95);
                padding: 1rem;
                border-radius: 10px;
                margin-top: 1rem;
            }
            
            .nav-link {
                padding: 0.8rem 1rem !important;
                margin: 0.3rem 0;
            }
        }

        .navbar.scrolled {
            padding: 10px 0;
            background: linear-gradient(135deg, #0a2472 0%, #1e3a8a 50%, #1e40af 100%) !important;
        }

        .contact-hero {
            background: linear-gradient(rgba(10, 36, 114, 0.9), rgba(30, 64, 175, 0.9)),
                        url('gr.jpg') center/cover;
            padding: 100px 0;
            color: white;
        }

        .contact-hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .contact-hero p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .contact-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .contact-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .contact-card:hover {
            transform: translateY(-5px);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .contact-info h3 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .contact-info p {
            color: #666;
            margin-bottom: 0.5rem;
        }

        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .form-floating > .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            height: calc(3.5rem + 2px);
            padding: 1rem 0.75rem;
        }

        .form-floating > .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(10, 36, 114, 0.25);
        }

        .form-floating > label {
            padding: 1rem 0.75rem;
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(10, 36, 114, 0.3);
        }

        .map-section {
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .map-section iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(10, 36, 114, 0.3);
            color: white;
        }

        @media (max-width: 768px) {
            .contact-hero {
                padding: 60px 0;
            }

            .contact-hero h1 {
                font-size: 2.5rem;
            }

            .contact-section {
                padding: 40px 0;
            }
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
                        <a class="nav-link active" href="contact.html">Contact</a>
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
    <section class="contact-hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Contact Us</h1>
            <p class="lead">Get in touch with us for any inquiries or to schedule a visit</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="contact-card p-4">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info">
                            <h3>Visit Us</h3>
                            <p><i class="fas fa-location-dot me-2"></i>123 Education Street</p>
                            <p>City, State 12345</p>
                            <p>Country</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-card p-4">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info">
                            <h3>Call Us</h3>
                            <p><i class="fas fa-phone me-2"></i>+1 234 567 890</p>
                            <p><i class="fas fa-phone me-2"></i>+1 234 567 891</p>
                            <p><i class="fas fa-clock me-2"></i>Mon - Fri: 8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-card p-4">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <h3>Email Us</h3>
                            <p><i class="fas fa-envelope me-2"></i>info@modernschool.com</p>
                            <p><i class="fas fa-envelope me-2"></i>admissions@modernschool.com</p>
                            <p><i class="fas fa-envelope me-2"></i>support@modernschool.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2 class="mb-4">Send us a Message</h2>
                        <form id="contactForm" onsubmit="return handleContactSubmit(event)">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" 
                                       placeholder="Enter your full name" required>
                                <label for="name"><i class="fas fa-user me-2"></i>Your Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" 
                                       placeholder="Enter your email address" required>
                                <label for="email"><i class="fas fa-envelope me-2"></i>Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="mobile" name="mobile" 
                                       pattern="[0-9]{10}" maxlength="10" 
                                       placeholder="Enter 10-digit mobile number" required>
                                <label for="mobile"><i class="fas fa-phone me-2"></i>Mobile Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="" disabled selected>Choose a subject</option>
                                    <option value="Admission Inquiry">Admission Inquiry</option>
                                    <option value="Academic Information">Academic Information</option>
                                    <option value="Fee Structure">Fee Structure</option>
                                    <option value="Campus Visit">Schedule Campus Visit</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="subject"><i class="fas fa-tag me-2"></i>Subject</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" 
                                          style="height: 150px" placeholder="Type your message here..." required></textarea>
                                <label for="message"><i class="fas fa-comment-alt me-2"></i>Message</label>
                            </div>
                            <div class="alert alert-success" id="successAlert" style="display: none;">
                                <i class="fas fa-check-circle me-2"></i><span></span>
                            </div>
                            <div class="alert alert-danger" id="errorAlert" style="display: none;">
                                <i class="fas fa-exclamation-circle me-2"></i><span></span>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-3">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Map Section -->
                <div class="col-lg-6">
                    <div class="map-section">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5996795!2d77.5945627!3d12.9715987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15986765d7d9%3A0x357fffc3ff298596!2sBangalore%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1647851234567!5m2!1sen!2sin" 
                                allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="social-links justify-content-center mt-4">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
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
        async function handleContactSubmit(event) {
            event.preventDefault();
            
            const submitBtn = event.target.querySelector('button[type="submit"]');
            const successAlert = document.getElementById('successAlert');
            const errorAlert = document.getElementById('errorAlert');
            
            // Hide any previous alerts
            successAlert.style.display = 'none';
            errorAlert.style.display = 'none';
            
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
            
            const formData = {
                name: document.getElementById('name').value.trim(),
                email: document.getElementById('email').value.trim(),
                mobile: document.getElementById('mobile').value.trim(),
                subject: document.getElementById('subject').value.trim(),
                message: document.getElementById('message').value.trim()
            };
            
            try {
                // Simulate API call
                await new Promise(resolve => setTimeout(resolve, 1500));
                
                // Show success message
                successAlert.textContent = 'Thank you for your message! We will get back to you soon.';
                successAlert.style.display = 'block';
                
                // Reset form
                event.target.reset();
                
            } catch (error) {
                errorAlert.textContent = 'Sorry, there was an error sending your message. Please try again.';
                errorAlert.style.display = 'block';
            } finally {
                // Reset button state
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane me-2"></i>Send Message';
            }
        }

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