<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0a2472;
            --secondary-color: #1e40af;
            --accent-color: #0dcaf0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
            padding: 2rem;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-header img {
            width: 80px;
            height: 80px;
            margin-bottom: 1rem;
        }

        .login-header h3 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .form-floating {
            margin-bottom: 1rem;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(10, 36, 114, 0.25);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            padding: 1rem;
            font-weight: 500;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
        }

        .alert {
            display: none;
            margin-bottom: 1rem;
        }

        .loading-spinner {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="login-header">
                <img src="logo.png" alt="School Logo" class="mb-4">
                <h3>Admin Login</h3>
                <p class="text-muted">Please sign in to continue</p>
            </div>

            <form id="loginForm" onsubmit="return handleLogin(event)">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    <label for="username"><i class="fas fa-user me-2"></i>Username</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password"><i class="fas fa-lock me-2"></i>Password</label>
                </div>

                <div class="alert alert-success shadow-sm border-0" id="successAlert">
                    <i class="fas fa-check-circle me-2"></i><span></span>
                </div>

                <div class="alert alert-danger shadow-sm border-0" id="errorAlert">
                    <i class="fas fa-exclamation-circle me-2"></i><span></span>
                </div>

                <button type="submit" class="btn btn-primary w-100 position-relative">
                    <span class="position-relative z-1">
                        <span class="spinner-border spinner-border-sm d-none loading-spinner" role="status" aria-hidden="true"></span>
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </span>
                </button>
            </form>
        </div>
    </div>

    <script>
        // Check if user is already logged in
        document.addEventListener('DOMContentLoaded', function() {
            if (localStorage.getItem('adminToken')) {
                window.location.href = 'admin-panel.html';
            }
        });

        // Handle login form submission
        async function handleLogin(event) {
            event.preventDefault();
            
            // Show loading state
            const submitBtn = event.target.querySelector('button[type="submit"]');
            const spinner = submitBtn.querySelector('.spinner-border');
            const icon = submitBtn.querySelector('.fa-sign-in-alt');
            
            submitBtn.disabled = true;
            spinner.classList.remove('d-none');
            icon.classList.add('d-none');
            
            // Hide alerts
            document.getElementById('successAlert').style.display = 'none';
            document.getElementById('errorAlert').style.display = 'none';
            
            try {
                // Get form data
                const username = document.getElementById('username').value.trim();
                const password = document.getElementById('password').value;
                
                if (!username || !password) {
                    throw new Error('Please enter both username and password');
                }
                
                console.log('Sending login request...');
                
                // Send login request
                const response = await fetch('api/auth.php?action=login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        username: username,
                        password: password
                    })
                });
                
                console.log('Response status:', response.status);
                
                // Check if response is ok
                if (!response.ok) {
                    if (response.status === 405) {
                        throw new Error('Server configuration error. Please contact the administrator.');
                    }
                    throw new Error(`Server error (${response.status}). Please try again later.`);
                }
                
                // Parse response
                let data;
                try {
                    const responseText = await response.text();
                    console.log('Response text:', responseText);
                    
                    if (!responseText) {
                        throw new Error('Empty response from server');
                    }
                    
                    data = JSON.parse(responseText);
                    console.log('Parsed data:', data);
                } catch (e) {
                    console.error('JSON parse error:', e);
                    throw new Error('Invalid server response. Please try again later.');
                }
                
                if (data.success) {
                    // Store token and user info
                    localStorage.setItem('adminToken', data.token);
                    localStorage.setItem('adminName', data.user.username);
                    
                    // Show success message
                    const successAlert = document.getElementById('successAlert');
                    successAlert.querySelector('span').textContent = 'Login successful! Redirecting...';
                    successAlert.style.display = 'block';
                    
                    // Redirect to admin panel
                    setTimeout(() => {
                        window.location.href = 'admin-panel.html';
                    }, 1000);
                } else {
                    throw new Error(data.message || 'Login failed');
                }
            } catch (error) {
                console.error('Login error:', error);
                
                // Show error message
                const errorAlert = document.getElementById('errorAlert');
                errorAlert.querySelector('span').textContent = error.message || 'An error occurred. Please try again later.';
                errorAlert.style.display = 'block';
                
                // Clear password field
                document.getElementById('password').value = '';
            } finally {
                // Reset button state
                submitBtn.disabled = false;
                spinner.classList.add('d-none');
                icon.classList.remove('d-none');
            }
            
            return false;
        }
    </script>
</body>
</html> 