<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <style>
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }
        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: none;
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
                        <a class="nav-link active" href="student-login.html">Student Login</a>
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

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Student Login</h2>
                        <form id="studentLoginForm" onsubmit="return loginStudent(event)">
                            <div class="mb-4">
                                <label for="uniqueNumber" class="form-label">Admission Number</label>
                                <input type="text" class="form-control" id="uniqueNumber" required 
                                    placeholder="Enter your admission number">
                                <div class="form-text">Please enter your unique admission number provided during admission.</div>
                            </div>
                            <div class="mb-4">
                                <label for="mpin" class="form-label">MPIN</label>
                                <input type="password" class="form-control" id="mpin" required placeholder="Enter your MPIN">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>
                            <div class="text-center mt-4">
                                <p class="mb-0">Forgot admission number? <a href="contact.html">Contact Admin</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        function loginStudent(event) {
            event.preventDefault();
            
            const uniqueNumber = document.getElementById('uniqueNumber').value;
            const mpin = document.getElementById('mpin').value;
            const submitButton = document.querySelector('button[type="submit"]');
            const errorMessage = document.createElement('div');
            errorMessage.className = 'error-message';
            
            // Add loading state
            submitButton.classList.add('loading');
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Logging in...';
            
            try {
                // Get student data from localStorage
                const studentData = JSON.parse(localStorage.getItem(uniqueNumber));
                
                if (studentData && studentData.mpin === mpin) {
                    // Store student unique number in session
                    sessionStorage.setItem('studentUniqueNumber', uniqueNumber);
                    // Redirect to student details page
                    window.location.href = 'student-details.html';
                } else {
                    throw new Error('Invalid credentials');
                }
            } catch (error) {
                // Remove any existing error message
                const existingError = document.querySelector('.error-message');
                if (existingError) {
                    existingError.remove();
                }
                
                // Show error message
                errorMessage.textContent = 'Invalid credentials! Please try again.';
                errorMessage.style.display = 'block';
                document.getElementById('studentLoginForm').appendChild(errorMessage);
                
                // Reset button state
                submitButton.classList.remove('loading');
                submitButton.innerHTML = 'Login';
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