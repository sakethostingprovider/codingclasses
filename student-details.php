<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details - Modern School</title>
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
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="logout()">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Student Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Personal Information</h5>
                                <table class="table">
                                    <tr>
                                        <th>Name:</th>
                                        <td id="studentName"></td>
                                    </tr>
                                    <tr>
                                        <th>Unique Number:</th>
                                        <td id="uniqueNumber"></td>
                                    </tr>
                                    <tr>
                                        <th>Class:</th>
                                        <td id="studentClass"></td>
                                    </tr>
                                    <tr>
                                        <th>Date of Birth:</th>
                                        <td id="dob"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5>Parent Information</h5>
                                <table class="table">
                                    <tr>
                                        <th>Father's Name:</th>
                                        <td id="fatherName"></td>
                                    </tr>
                                    <tr>
                                        <th>Mother's Name:</th>
                                        <td id="motherName"></td>
                                    </tr>
                                    <tr>
                                        <th>Mobile:</th>
                                        <td id="mobile"></td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td id="email"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>Address</h5>
                                <p id="address"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function loadStudentDetails() {
            const uniqueNumber = sessionStorage.getItem('studentUniqueNumber');
            if (!uniqueNumber) {
                window.location.href = 'index.html';
                return;
            }

            const studentData = JSON.parse(localStorage.getItem(uniqueNumber));
            if (!studentData) {
                alert('Student data not found!');
                window.location.href = 'index.html';
                return;
            }

            // Display student details
            document.getElementById('studentName').textContent = studentData.name;
            document.getElementById('uniqueNumber').textContent = studentData.uniqueNumber;
            document.getElementById('studentClass').textContent = studentData.class;
            document.getElementById('dob').textContent = studentData.dob;
            document.getElementById('fatherName').textContent = studentData.fatherName;
            document.getElementById('motherName').textContent = studentData.motherName;
            document.getElementById('mobile').textContent = studentData.mobile;
            document.getElementById('email').textContent = studentData.email;
            document.getElementById('address').textContent = studentData.address;
        }

        function logout() {
            sessionStorage.removeItem('studentUniqueNumber');
            sessionStorage.removeItem('parentLoggedIn');
            window.location.href = 'index.html';
        }

        // Load details when page loads
        window.onload = loadStudentDetails;
    </script>
</body>
</html> 