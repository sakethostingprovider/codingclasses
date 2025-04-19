<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="logo.png" alt="School Logo" width="50" height="50" class="d-inline-block align-text-top">
                Modern School
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#" onclick="logout()">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="student-avatar.png" alt="Student" class="rounded-circle mb-3" width="120">
                        <h4 id="studentNameDisplay">Loading...</h4>
                        <p class="text-muted" id="classDisplay">Class: Loading...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Student Information</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Admission Number:</strong> <span id="admissionNumberDisplay"></span></p>
                                <p><strong>Date of Birth:</strong> <span id="dobDisplay"></span></p>
                                <p><strong>Father's Name:</strong> <span id="fatherNameDisplay"></span></p>
                                <p><strong>Mother's Name:</strong> <span id="motherNameDisplay"></span></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Mobile:</strong> <span id="mobileDisplay"></span></p>
                                <p><strong>Email:</strong> <span id="emailDisplay"></span></p>
                                <p><strong>Previous School:</strong> <span id="previousSchoolDisplay"></span></p>
                                <p><strong>Address:</strong> <span id="addressDisplay"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Academic Performance</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Marks</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mathematics</td>
                                        <td>95</td>
                                        <td>A+</td>
                                    </tr>
                                    <tr>
                                        <td>Physics</td>
                                        <td>92</td>
                                        <td>A+</td>
                                    </tr>
                                    <tr>
                                        <td>Chemistry</td>
                                        <td>88</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>English</td>
                                        <td>92</td>
                                        <td>A+</td>
                                    </tr>
                                    <tr>
                                        <td>Biology</td>
                                        <td>90</td>
                                        <td>A+</td>
                                    </tr>
                                    <tr>
                                        <td>Physical Education</td>
                                        <td>95</td>
                                        <td>A+</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Attendance</h4>
                        <div class="text-center">
                            <div class="display-4 text-primary mb-3">95%</div>
                            <p>Present: 85 days</p>
                            <p>Absent: 5 days</p>
                            <p>Total Working Days: 90 days</p>
                        </div>
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
        // Check if user is logged in
        window.onload = function() {
            const uniqueNumber = sessionStorage.getItem('loggedInUser');
            if (!uniqueNumber) {
                window.location.href = 'student-login.html';
                return;
            }
            
            // Get student data from localStorage
            const studentData = JSON.parse(localStorage.getItem(uniqueNumber));
            if (studentData) {
                displayStudentData(studentData);
            }
        };

        function displayStudentData(data) {
            document.getElementById('studentNameDisplay').textContent = data.name;
            document.getElementById('classDisplay').textContent = `Class: ${data.class}`;
            document.getElementById('admissionNumberDisplay').textContent = data.uniqueNumber;
            document.getElementById('dobDisplay').textContent = data.dob;
            document.getElementById('fatherNameDisplay').textContent = data.fatherName;
            document.getElementById('motherNameDisplay').textContent = data.motherName;
            document.getElementById('mobileDisplay').textContent = data.mobile;
            document.getElementById('emailDisplay').textContent = data.email;
            document.getElementById('previousSchoolDisplay').textContent = data.previousSchool || 'N/A';
            document.getElementById('addressDisplay').textContent = data.address;
        }

        function logout() {
            sessionStorage.removeItem('loggedInUser');
            window.location.href = 'index.html';
        }
    </script>
</body>
</html> 