<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern School - Admission Form">
    <title>Admission - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <style>
        .admission-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .process-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
            position: relative;
        }
        .process-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .process-number {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #007bff;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        .process-icon {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 20px;
        }
        .requirement-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }
        .requirement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .requirement-icon {
            font-size: 2.5rem;
            color: #007bff;
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
        .timeline {
            position: relative;
            padding: 20px 0;
        }
        .timeline:before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background-color: #007bff;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        .timeline-content {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
            width: calc(50% - 30px);
        }
        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: auto;
        }
        .timeline-item:before {
            content: '';
            position: absolute;
            top: 20px;
            width: 20px;
            height: 20px;
            background: #007bff;
            border-radius: 50%;
        }
        .timeline-item:nth-child(odd):before {
            left: calc(50% - 40px);
        }
        .timeline-item:nth-child(even):before {
            right: calc(50% - 40px);
        }
        .fee-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }
        .fee-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .fee-header {
            background: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .fee-body {
            padding: 20px;
        }
        .fee-price {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .cta-section {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
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
                        <a class="nav-link active" href="admission.html">Admission</a>
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

    <!-- Admission Section -->
    <section class="admission-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Admission Form</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>Admission fee: ₹200
                        </div>
                            <form id="admissionForm" onsubmit="return handleAdmissionSubmit(event)">
                                <h4 class="mb-4">Student Information</h4>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" required>
                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" required>
                </div>
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender" required>
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                        </div>
                    </div>
                                <div class="mb-3">
                                    <label for="class" class="form-label">Class Applying For</label>
                                    <select class="form-select" id="class" required>
                                        <option value="11">Class 11</option>
                                        <option value="12">Class 12</option>
                                    </select>
                </div>
                                <div class="mb-3">
                                    <label for="stream" class="form-label">Stream (for Class 11-12)</label>
                                    <select class="form-select" id="stream">
                                        <option value="">Select Stream</option>
                                        <option value="science">Science</option>
                                    </select>
        </div>
                                
                                <h4 class="mb-4 mt-5">Parent/Guardian Information</h4>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="parentName" class="form-label">Parent/Guardian Name</label>
                                        <input type="text" class="form-control" id="parentName" required>
                    </div>
                                    <div class="col-md-6">
                                        <label for="relationship" class="form-label">Relationship</label>
                                        <select class="form-select" id="relationship" required>
                                            <option value="">Select Relationship</option>
                                            <option value="father">Father</option>
                                            <option value="mother">Mother</option>
                                            <option value="guardian">Guardian</option>
                                        </select>
                    </div>
                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Mobile Number</label>
                                        <input type="tel" class="form-control" id="mobile" pattern="[0-9]{10}" required>
                                        <div class="form-text">This number will receive the admission number and MPIN</div>
                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                    </div>
                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" rows="3" required></textarea>
        </div>
                                
                                <h4 class="mb-4 mt-5">Payment Information</h4>
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle me-2"></i>Admission fee of ₹200 must be paid to complete the admission process.
        </div>
                                <div class="mb-3">
                                    <label for="paymentMethod" class="form-label">Payment Method</label>
                                    <select class="form-select" id="paymentMethod" required>
                                        <option value="">Select Payment Method</option>
                                        <option value="upi">UPI</option>
                                        <option value="card">Credit/Debit Card</option>
                                        <option value="netbanking">Net Banking</option>
                                    </select>
                                </div>
                                <div id="upiDetails" class="mb-3 d-none">
                                    <label for="upiId" class="form-label">UPI ID</label>
                                    <input type="text" class="form-control" id="upiId" placeholder="example@upi">
                                </div>
                                <div id="cardDetails" class="mb-3 d-none">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="cardNumber" class="form-label">Card Number</label>
                                            <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="expiryDate" class="form-label">Expiry Date</label>
                                            <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="cvv" class="form-label">CVV</label>
                                            <input type="text" class="form-control" id="cvv" placeholder="123">
                            </div>
                        </div>
                                </div>
                                <div id="netbankingDetails" class="mb-3 d-none">
                                    <label for="bank" class="form-label">Select Bank</label>
                                    <select class="form-select" id="bank">
                                        <option value="">Select Bank</option>
                                        <option value="sbi">State Bank of India</option>
                                        <option value="hdfc">HDFC Bank</option>
                                        <option value="icici">ICICI Bank</option>
                                        <option value="axis">Axis Bank</option>
                                        <option value="pnb">Punjab National Bank</option>
                                    </select>
                            </div>
                                
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the terms and conditions
                                    </label>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                        Pay ₹200 & Submit Application
                                </button>
                                </div>
                            </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Show/hide payment method details
        document.querySelectorAll('input[name="paymentMethod"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                document.querySelectorAll('.payment-details').forEach(function(details) {
                    details.style.display = 'none';
                });
                if (this.checked) {
                    document.getElementById(this.value + 'Details').style.display = 'block';
                }
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Handle admission form submission
        async function handleAdmissionSubmit(event) {
            event.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            const spinner = submitBtn.querySelector('.spinner-border');
            
            // Show loading state
            submitBtn.disabled = true;
            spinner.classList.remove('d-none');
            
            // Collect form data
            const formData = {
                student: {
                    firstName: document.getElementById('firstName').value,
                    lastName: document.getElementById('lastName').value,
                    dob: document.getElementById('dob').value,
                    gender: document.getElementById('gender').value,
                    class: document.getElementById('class').value,
                    stream: document.getElementById('stream').value
                },
                parent: {
                    name: document.getElementById('parentName').value,
                    relationship: document.getElementById('relationship').value,
                    mobile: document.getElementById('mobile').value,
                    email: document.getElementById('email').value,
                    address: document.getElementById('address').value
                },
                payment: {
                    method: document.getElementById('paymentMethod').value,
                    amount: 200
                }
            };
            
            // Add payment details based on selected method
            if (formData.payment.method === 'upi') {
                formData.payment.upiId = document.getElementById('upiId').value;
            } else if (formData.payment.method === 'card') {
                formData.payment.cardNumber = document.getElementById('cardNumber').value;
                formData.payment.expiryDate = document.getElementById('expiryDate').value;
                formData.payment.cvv = document.getElementById('cvv').value;
            } else if (formData.payment.method === 'netbanking') {
                formData.payment.bank = document.getElementById('bank').value;
            }
            
            try {
                // Send data to backend API
                const response = await fetch('/api/admission', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });
                
                if (!response.ok) {
                    throw new Error('Failed to submit admission form');
                }
                
                const data = await response.json();
                
                // Show success message with admission number
                alert(`Admission successful! Your admission number is: ${data.admissionNumber}\nYour MPIN is: ${data.mpin}\nThese details have been sent to your mobile number.`);
                
                // Redirect to student login page
                window.location.href = 'student-login.html';
            } catch (error) {
                console.error('Error submitting admission form:', error);
                alert('Sorry, there was an error processing your admission. Please try again.');
            } finally {
                // Hide loading state
                submitBtn.disabled = false;
                spinner.classList.add('d-none');
            }
            
            return false;
        }
    </script>
</body>
</html>