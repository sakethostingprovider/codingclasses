<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --text-color: #1f2937;
            --light-bg: #f8fafc;
            --dark-bg: #1e293b;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .sidebar {
            background: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            min-height: calc(100vh - 72px);
            position: fixed;
            top: 72px;
            left: 0;
            z-index: 100;
            padding: 1.5rem 0;
            transition: all 0.3s ease;
            width: 250px;
        }

        .nav-link {
            color: var(--text-color);
            padding: 0.75rem 1.25rem;
            border-radius: 0.5rem;
            margin: 0.25rem 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .nav-link:hover {
            background-color: var(--light-bg);
            color: var(--primary-color);
            transform: translateX(5px);
        }

        .nav-link.active {
            background-color: var(--primary-color);
            color: white !important;
        }

        .main-content {
            margin-left: 250px;
            padding: 2rem;
            transition: all 0.3s ease;
            margin-top: 72px;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            background: white;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.1);
        }

        .stat-card {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
        }

        .table {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .table th {
            background-color: var(--light-bg);
            border-bottom: 2px solid #e5e7eb;
            padding: 1rem;
            font-weight: 600;
        }

        .table td {
            padding: 1rem;
            vertical-align: middle;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .loading-spinner {
            width: 3rem;
            height: 3rem;
        }

        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            min-width: 300px;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .toast-header {
            border-radius: 0.5rem 0.5rem 0 0;
        }

        .badge {
            padding: 0.5rem 0.75rem;
            border-radius: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37,99,235,0.1);
        }

        .modal-content {
            border-radius: 1rem;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .modal-header {
            border-bottom: 2px solid #e5e7eb;
            padding: 1.5rem;
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-footer {
            border-top: 2px solid #e5e7eb;
            padding: 1.5rem;
        }

        .section {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -250px;
                top: 72px;
                height: calc(100vh - 72px);
                z-index: 1000;
            }

            .sidebar.show {
                left: 0;
            }

            .main-content {
                margin-left: 0;
                padding: 1rem;
            }

            .navbar-toggler {
                display: block;
            }
        }

        .custom-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) var(--light-bg);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: var(--light-bg);
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: var(--primary-color);
            border-radius: 4px;
        }
    </style>
</head>
<body class="custom-scrollbar">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">
                <i class="fas fa-school me-2"></i>
                Modern School Admin
            </a>
            <div class="ms-auto d-flex align-items-center">
                <div class="dropdown">
                    <button class="btn btn-link text-white dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-2"></i>
                        <span id="adminName">Admin</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#" onclick="showProfile()">
                            <i class="fas fa-user me-2"></i>Profile
                        </a></li>
                        <li><a class="dropdown-item" href="#" onclick="showSettings()">
                            <i class="fas fa-cog me-2"></i>Settings
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" onclick="logout()">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" onclick="showSection('dashboard')">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('results')">
                                <i class="fas fa-chart-bar"></i>
                                <span>Manage Results</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('students')">
                                <i class="fas fa-user-graduate"></i>
                                <span>Student Records</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('attendance')">
                                <i class="fas fa-clipboard-check"></i>
                                <span>Attendance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('admissions')">
                                <i class="fas fa-file-alt"></i>
                                <span>Admission Requests</span>
                                <span class="badge bg-danger rounded-pill ms-auto" id="newAdmissionsCount">0</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('allAdmissions')">
                                <i class="fas fa-folder-open"></i>
                                <span>All Admission Forms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('contactMessages')">
                                <i class="fas fa-envelope"></i>
                                <span>Contact Messages</span>
                                <span class="badge bg-danger rounded-pill ms-auto" id="newMessagesCount">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="main-content">
                <!-- Loading Spinner -->
                <div class="position-fixed top-50 start-50 translate-middle" id="loadingSpinner" style="display: none;">
                    <div class="spinner-border text-primary loading-spinner" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>

                <!-- Toast Notifications -->
                <div class="toast-container">
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="successToast">
                        <div class="toast-header bg-success text-white">
                            <i class="fas fa-check-circle me-2"></i>
                            <strong class="me-auto">Success</strong>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                        </div>
                        <div class="toast-body" id="successToastMessage"></div>
                    </div>

                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="errorToast">
                        <div class="toast-header bg-danger text-white">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <strong class="me-auto">Error</strong>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                        </div>
                        <div class="toast-body" id="errorToastMessage"></div>
                    </div>
                </div>

                <!-- Dashboard Section -->
                <div id="dashboard" class="section">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0">Dashboard</h2>
                        <button class="btn btn-primary" onclick="refreshDashboard()">
                            <i class="fas fa-sync-alt me-2"></i>Refresh
                        </button>
                    </div>
                    
                    <!-- Statistics Cards -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-3">
                            <div class="card stat-card h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-subtitle mb-2 opacity-75">Total Students</h6>
                                            <h2 class="card-title mb-0" id="totalStudents">0</h2>
                                        </div>
                                        <div class="stat-icon">
                                            <i class="fas fa-user-graduate fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card stat-card h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-subtitle mb-2 opacity-75">New Admissions</h6>
                                            <h2 class="card-title mb-0" id="newAdmissions">0</h2>
                                        </div>
                                        <div class="stat-icon">
                                            <i class="fas fa-file-alt fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card stat-card h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-subtitle mb-2 opacity-75">Unread Messages</h6>
                                            <h2 class="card-title mb-0" id="unreadMessages">0</h2>
                                        </div>
                                        <div class="stat-icon">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card stat-card h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-subtitle mb-2 opacity-75">Today's Attendance</h6>
                                            <h2 class="card-title mb-0" id="todayAttendance">0%</h2>
                                        </div>
                                        <div class="stat-icon">
                                            <i class="fas fa-clipboard-check fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="card mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="card-title mb-0">Recent Activity</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Activity</th>
                                            <th>User</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="recentActivity">
                                        <!-- Activity items will be loaded here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Messages Section -->
                <div id="contactMessages" class="section">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0">Contact Messages</h2>
                        <div class="d-flex gap-2">
                            <div class="input-group">
                                <input type="text" class="form-control" id="messageSearch" placeholder="Search messages...">
                                <button class="btn btn-outline-secondary" type="button" onclick="searchMessages()">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <select class="form-select" id="messageStatus" onchange="filterMessages()">
                                <option value="">All Status</option>
                                <option value="new">New</option>
                                <option value="responded">Responded</option>
                                <option value="archived">Archived</option>
                            </select>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="messagesList">
                                        <!-- Messages will be loaded here -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="text-muted">
                                    Showing <span id="messagesCount">0</span> messages
                                </div>
                                <nav aria-label="Messages pagination">
                                    <ul class="pagination mb-0" id="messagesPagination">
                                        <!-- Pagination will be loaded here -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message Response Modal -->
                <div class="modal fade" id="responseModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Respond to Message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-4">
                                    <h6>Original Message</h6>
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <p class="mb-1"><strong>From:</strong> <span id="messageFrom"></span></p>
                                            <p class="mb-1"><strong>Subject:</strong> <span id="messageSubject"></span></p>
                                            <p class="mb-0"><strong>Message:</strong></p>
                                            <p id="messageContent" class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="responseText" class="form-label">Your Response</label>
                                    <textarea class="form-control" id="responseText" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" onclick="sendResponse()">Send Response</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Global variables
        let currentSection = 'dashboard';
        let currentPage = 1;
        let totalPages = 1;
        let selectedMessageId = null;

        // Check authentication on page load
        document.addEventListener('DOMContentLoaded', function() {
            const token = localStorage.getItem('adminToken');
            if (!token) {
                window.location.href = 'admin-login.html';
                return;
            }

            // Verify token
            fetch('api/auth.php?action=verify', {
                headers: {
                    'Authorization': 'Bearer ' + token
                }
            })
            .then(response => response.json())
            .then(data => {
                if (!data.success) {
                    throw new Error(data.message);
                }
                
                // Update admin name
                document.getElementById('adminName').textContent = data.user.username;
                
                // Load initial data
                loadDashboard();
                setupEventListeners();
            })
            .catch(error => {
                console.error('Authentication error:', error);
                localStorage.removeItem('adminToken');
                window.location.href = 'admin-login.html';
            });
        });

        // Toggle sidebar on mobile
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('show');
        }

        // Load dashboard data
        async function loadDashboard() {
            try {
                showLoading();
                const response = await fetch('api/admin.php?action=get_dashboard', {
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('adminToken')
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to load dashboard data');
                }

                const data = await response.json();
                if (!data.success) {
                    throw new Error(data.message);
                }

                updateDashboardStats(data.data);
                updateRecentActivity(data.data.recent_activity);
            } catch (error) {
                showError('Failed to load dashboard: ' + error.message);
            } finally {
                hideLoading();
            }
        }

        // Update dashboard statistics
        function updateDashboardStats(data) {
            document.getElementById('totalStudents').textContent = data.total_students;
            document.getElementById('newAdmissions').textContent = data.new_admissions;
            document.getElementById('unreadMessages').textContent = data.unread_messages;
            document.getElementById('todayAttendance').textContent = data.today_attendance + '%';
            
            // Update badges
            document.getElementById('newAdmissionsCount').textContent = data.new_admissions;
            document.getElementById('newMessagesCount').textContent = data.unread_messages;
        }

        // Update recent activity
        function updateRecentActivity(activities) {
            const tbody = document.getElementById('recentActivity');
            tbody.innerHTML = '';

            activities.forEach(activity => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${formatDate(activity.created_at)}</td>
                    <td>${activity.action}</td>
                    <td>${activity.username || 'System'}</td>
                    <td>
                        <span class="badge bg-${getStatusColor(activity.status)}">
                            ${activity.status}
                        </span>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        // Load messages
        async function loadMessages(page = 1) {
            try {
                showLoading();
                const status = document.getElementById('messageStatus').value;
                const search = document.getElementById('messageSearch').value;

                const response = await fetch(`api/admin.php?action=get_messages&page=${page}&status=${status}&search=${search}`, {
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('adminToken')
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to load messages');
                }

                const data = await response.json();
                if (!data.success) {
                    throw new Error(data.message);
                }

                updateMessagesList(data.data.messages);
                updatePagination(data.data.pagination);
            } catch (error) {
                showError('Failed to load messages: ' + error.message);
            } finally {
                hideLoading();
            }
        }

        // Update messages list
        function updateMessagesList(messages) {
            const tbody = document.getElementById('messagesList');
            tbody.innerHTML = '';
            document.getElementById('messagesCount').textContent = messages.length;

            messages.forEach(message => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${formatDate(message.created_at)}</td>
                    <td>${message.name}</td>
                    <td>${message.email}</td>
                    <td>${message.subject}</td>
                    <td>
                        <span class="badge bg-${getStatusColor(message.status)}">
                            ${message.status}
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary me-2" onclick="showResponseModal(${message.id})">
                            <i class="fas fa-reply"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="deleteMessage(${message.id})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        // Update pagination
        function updatePagination(pagination) {
            const ul = document.getElementById('messagesPagination');
            ul.innerHTML = '';

            // Previous button
            const prevLi = document.createElement('li');
            prevLi.className = `page-item ${pagination.page <= 1 ? 'disabled' : ''}`;
            prevLi.innerHTML = `
                <a class="page-link" href="#" onclick="loadMessages(${pagination.page - 1})">
                    <i class="fas fa-chevron-left"></i>
                </a>
            `;
            ul.appendChild(prevLi);

            // Page numbers
            for (let i = 1; i <= pagination.pages; i++) {
                const li = document.createElement('li');
                li.className = `page-item ${i === pagination.page ? 'active' : ''}`;
                li.innerHTML = `
                    <a class="page-link" href="#" onclick="loadMessages(${i})">${i}</a>
                `;
                ul.appendChild(li);
            }

            // Next button
            const nextLi = document.createElement('li');
            nextLi.className = `page-item ${pagination.page >= pagination.pages ? 'disabled' : ''}`;
            nextLi.innerHTML = `
                <a class="page-link" href="#" onclick="loadMessages(${pagination.page + 1})">
                    <i class="fas fa-chevron-right"></i>
                </a>
            `;
            ul.appendChild(nextLi);
        }

        // Show response modal
        async function showResponseModal(messageId) {
            try {
                showLoading();
                const response = await fetch(`api/contact.php?id=${messageId}`, {
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('adminToken')
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to load message details');
                }

                const data = await response.json();
                if (!data.success) {
                    throw new Error(data.message);
                }

                const message = data.data;
                document.getElementById('messageFrom').textContent = `${message.name} (${message.email})`;
                document.getElementById('messageSubject').textContent = message.subject;
                document.getElementById('messageContent').textContent = message.message;
                document.getElementById('responseText').value = '';
                selectedMessageId = messageId;

                const modal = new bootstrap.Modal(document.getElementById('responseModal'));
                modal.show();
            } catch (error) {
                showError('Failed to load message details: ' + error.message);
            } finally {
                hideLoading();
            }
        }

        // Send response
        async function sendResponse() {
            try {
                const response = document.getElementById('responseText').value;
                if (!response) {
                    throw new Error('Please enter a response');
                }

                showLoading();
                const result = await fetch('api/admin.php?action=respond', {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('adminToken'),
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `message_id=${selectedMessageId}&response=${encodeURIComponent(response)}`
                });

                if (!result.ok) {
                    throw new Error('Failed to send response');
                }

                const data = await result.json();
                if (!data.success) {
                    throw new Error(data.message);
                }

                showSuccess('Response sent successfully');
                bootstrap.Modal.getInstance(document.getElementById('responseModal')).hide();
                loadMessages(currentPage);
                loadDashboard();
            } catch (error) {
                showError('Failed to send response: ' + error.message);
            } finally {
                hideLoading();
            }
        }

        // Delete message
        async function deleteMessage(messageId) {
            if (!confirm('Are you sure you want to delete this message?')) {
                return;
            }

            try {
                showLoading();
                const response = await fetch(`api/admin.php?action=delete&id=${messageId}`, {
                    method: 'DELETE',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('adminToken')
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to delete message');
                }

                const data = await response.json();
                if (!data.success) {
                    throw new Error(data.message);
                }

                showSuccess('Message deleted successfully');
                loadMessages(currentPage);
                loadDashboard();
            } catch (error) {
                showError('Failed to delete message: ' + error.message);
            } finally {
                hideLoading();
            }
        }

        // Filter messages
        function filterMessages() {
            currentPage = 1;
            loadMessages(currentPage);
        }

        // Search messages
        function searchMessages() {
            currentPage = 1;
            loadMessages(currentPage);
        }

        // Show section
        function showSection(section) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(s => {
                s.style.display = 'none';
            });

            // Show selected section
            document.getElementById(section).style.display = 'block';

            // Update active nav link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            event.currentTarget.classList.add('active');

            // Update current section
            currentSection = section;

            // Load section data
            switch(section) {
                case 'dashboard':
                    loadDashboard();
                    break;
                case 'contactMessages':
                    loadMessages();
                    break;
                // Add other section handlers here
            }
        }

        // Utility functions
        function showLoading() {
            document.getElementById('loadingSpinner').style.display = 'block';
        }

        function hideLoading() {
            document.getElementById('loadingSpinner').style.display = 'none';
        }

        function showSuccess(message) {
            const toast = document.getElementById('successToast');
            document.getElementById('successToastMessage').textContent = message;
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();
        }

        function showError(message) {
            const toast = document.getElementById('errorToast');
            document.getElementById('errorToastMessage').textContent = message;
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();
        }

        function formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'short',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
        }

        function getStatusColor(status) {
            switch(status.toLowerCase()) {
                case 'new':
                    return 'warning';
                case 'responded':
                    return 'success';
                case 'archived':
                    return 'secondary';
                default:
                    return 'primary';
            }
        }

        // Logout function
        function logout() {
            localStorage.removeItem('adminToken');
            window.location.href = 'login.html';
        }

        // Setup event listeners
        function setupEventListeners() {
            // Add event listeners for search and filter
            document.getElementById('messageSearch').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    searchMessages();
                }
            });

            // Add event listener for window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    document.querySelector('.sidebar').classList.remove('show');
                }
            });
        }
    </script>
</body>
</html>