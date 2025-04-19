<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Events - Modern School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <style>
        .news-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .news-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
            margin-bottom: 30px;
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .news-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .news-date {
            color: #007bff;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
        .news-category {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #007bff;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        .event-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
            margin-bottom: 30px;
        }
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .event-date {
            background: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .event-day {
            font-size: 2rem;
            font-weight: bold;
            line-height: 1;
        }
        .event-month {
            font-size: 1rem;
            text-transform: uppercase;
        }
        .announcement-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
            margin-bottom: 30px;
        }
        .announcement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .announcement-icon {
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
        .newsletter-section {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
        }
        .newsletter-input {
            border-radius: 30px;
            padding: 15px 25px;
            border: none;
        }
        .newsletter-btn {
            border-radius: 30px;
            padding: 15px 30px;
            background: #007bff;
            border: none;
        }
        .news-tabs .nav-link {
            border: none;
            color: #333;
            font-weight: 500;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        .news-tabs .nav-link.active {
            background: #007bff;
            color: white;
        }
        .news-tabs .nav-link:hover:not(.active) {
            background: #f8f9fa;
        }
        .article-content {
            line-height: 1.8;
            font-size: 1.1rem;
        }
        .modal-dialog {
            max-width: 800px;
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
                        <a class="nav-link active" href="news.html">News</a>
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
    <section class="news-hero text-center">
        <div class="container">
            <h1 class="display-4 mb-4">News & Events</h1>
            <p class="lead">Stay updated with the latest happenings at Modern School</p>
        </div>
    </section>

    <!-- News Tabs -->
    <section class="py-5">
        <div class="container">
            <ul class="nav nav-pills news-tabs justify-content-center mb-5" id="newsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All News</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="events-tab" data-bs-toggle="pill" data-bs-target="#events" type="button" role="tab" aria-controls="events" aria-selected="false">Events</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="announcements-tab" data-bs-toggle="pill" data-bs-target="#announcements" type="button" role="tab" aria-controls="announcements" aria-selected="false">Announcements</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="achievements-tab" data-bs-toggle="pill" data-bs-target="#achievements" type="button" role="tab" aria-controls="achievements" aria-selected="false">Achievements</button>
                </li>
            </ul>

            <div class="tab-content" id="newsTabsContent">
                <!-- All News Tab -->
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row">
                        <!-- News Item 1 -->
                        <div class="col-md-4">
                            <div class="card news-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="news-img" alt="School Achievement">
                                    <span class="news-category">Achievement</span>
                                </div>
                                <div class="card-body p-4">
                                    <div class="news-date"><i class="far fa-calendar-alt me-2"></i>June 15, 2024</div>
                                    <h4 class="card-title">Modern School Ranks #1 in State Board Exams</h4>
                                    <p class="card-text">Our students have achieved outstanding results in the state board examinations, securing the top position for the third consecutive year.</p>
                                    <a href="#" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- News Item 2 -->
                        <div class="col-md-4">
                            <div class="card news-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="news-img" alt="School Event">
                                    <span class="news-category">Event</span>
                                </div>
                                <div class="card-body p-4">
                                    <div class="news-date"><i class="far fa-calendar-alt me-2"></i>June 10, 2024</div>
                                    <h4 class="card-title">Annual Sports Day Celebration</h4>
                                    <p class="card-text">The school's annual sports day was a grand success with students participating in various athletic events and showcasing their talents.</p>
                                    <a href="#" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- News Item 3 -->
                        <div class="col-md-4">
                            <div class="card news-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="news-img" alt="School Announcement">
                                    <span class="news-category">Announcement</span>
                                </div>
                                <div class="card-body p-4">
                                    <div class="news-date"><i class="far fa-calendar-alt me-2"></i>June 5, 2024</div>
                                    <h4 class="card-title">New Science Lab Inauguration</h4>
                                    <p class="card-text">The school has inaugurated a state-of-the-art science laboratory equipped with modern facilities to enhance practical learning.</p>
                                    <a href="#" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Events Tab -->
                <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
                    <div class="row">
                        <!-- Event 1 -->
                        <div class="col-md-6">
                            <div class="card event-card">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="event-date">
                                                <div class="event-day">25</div>
                                                <div class="event-month">June</div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="card-title">Parent-Teacher Meeting</h4>
                                            <p class="card-text">Annual parent-teacher meeting for all classes to discuss student progress and academic performance.</p>
                                            <p><i class="fas fa-map-marker-alt me-2"></i>School Auditorium</p>
                                            <p><i class="far fa-clock me-2"></i>10:00 AM - 2:00 PM</p>
                                            <a href="#" class="btn btn-outline-primary mt-2">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Event 2 -->
                        <div class="col-md-6">
                            <div class="card event-card">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="event-date">
                                                <div class="event-day">30</div>
                                                <div class="event-month">June</div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="card-title">Annual Day Celebration</h4>
                                            <p class="card-text">Grand celebration of the school's annual day with cultural performances, awards ceremony, and more.</p>
                                            <p><i class="fas fa-map-marker-alt me-2"></i>School Ground</p>
                                            <p><i class="far fa-clock me-2"></i>5:00 PM - 9:00 PM</p>
                                            <a href="#" class="btn btn-outline-primary mt-2">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Event 3 -->
                        <div class="col-md-6">
                            <div class="card event-card">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="event-date">
                                                <div class="event-day">05</div>
                                                <div class="event-month">July</div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="card-title">Science Exhibition</h4>
                                            <p class="card-text">Annual science exhibition showcasing innovative projects by students from all grades.</p>
                                            <p><i class="fas fa-map-marker-alt me-2"></i>School Science Block</p>
                                            <p><i class="far fa-clock me-2"></i>9:00 AM - 4:00 PM</p>
                                            <a href="#" class="btn btn-outline-primary mt-2">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Event 4 -->
                        <div class="col-md-6">
                            <div class="card event-card">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="event-date">
                                                <div class="event-day">15</div>
                                                <div class="event-month">July</div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="card-title">Inter-School Debate Competition</h4>
                                            <p class="card-text">Annual inter-school debate competition with participation from top schools in the region.</p>
                                            <p><i class="fas fa-map-marker-alt me-2"></i>School Auditorium</p>
                                            <p><i class="far fa-clock me-2"></i>10:00 AM - 5:00 PM</p>
                                            <a href="#" class="btn btn-outline-primary mt-2">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Announcements Tab -->
                <div class="tab-pane fade" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
                    <div class="row">
                        <!-- Announcement 1 -->
                        <div class="col-md-4">
                            <div class="card announcement-card text-center">
                                <div class="card-body p-4">
                                    <i class="fas fa-bell announcement-icon"></i>
                                    <h4>Holiday Notice</h4>
                                    <p class="text-muted">June 20, 2024</p>
                                    <p class="card-text">The school will remain closed on June 20, 2024, due to local elections. Classes will resume on June 21, 2024.</p>
                                    <a href="#" class="btn btn-outline-primary mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Announcement 2 -->
                        <div class="col-md-4">
                            <div class="card announcement-card text-center">
                                <div class="card-body p-4">
                                    <i class="fas fa-file-alt announcement-icon"></i>
                                    <h4>Exam Schedule</h4>
                                    <p class="text-muted">June 18, 2024</p>
                                    <p class="card-text">The mid-term examination schedule for all classes has been published. Please check the school portal for details.</p>
                                    <a href="#" class="btn btn-outline-primary mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Announcement 3 -->
                        <div class="col-md-4">
                            <div class="card announcement-card text-center">
                                <div class="card-body p-4">
                                    <i class="fas fa-user-plus announcement-icon"></i>
                                    <h4>New Faculty</h4>
                                    <p class="text-muted">June 15, 2024</p>
                                    <p class="card-text">We are pleased to welcome our new faculty members who will be joining the school from the upcoming academic year.</p>
                                    <a href="#" class="btn btn-outline-primary mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Announcement 4 -->
                        <div class="col-md-4">
                            <div class="card announcement-card text-center">
                                <div class="card-body p-4">
                                    <i class="fas fa-laptop announcement-icon"></i>
                                    <h4>Online Classes</h4>
                                    <p class="text-muted">June 12, 2024</p>
                                    <p class="card-text">Online classes will be conducted for students who are unable to attend school due to health reasons. Please contact the class teacher.</p>
                                    <a href="#" class="btn btn-outline-primary mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Announcement 5 -->
                        <div class="col-md-4">
                            <div class="card announcement-card text-center">
                                <div class="card-body p-4">
                                    <i class="fas fa-bus announcement-icon"></i>
                                    <h4>Transport Update</h4>
                                    <p class="text-muted">June 10, 2024</p>
                                    <p class="card-text">The school bus routes have been updated for the new academic year. Please check the school website for the new schedule.</p>
                                    <a href="#" class="btn btn-outline-primary mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Announcement 6 -->
                        <div class="col-md-4">
                            <div class="card announcement-card text-center">
                                <div class="card-body p-4">
                                    <i class="fas fa-book announcement-icon"></i>
                                    <h4>Library Hours</h4>
                                    <p class="text-muted">June 8, 2024</p>
                                    <p class="card-text">The school library will remain open until 6:00 PM on weekdays and 2:00 PM on Saturdays for students preparing for exams.</p>
                                    <a href="#" class="btn btn-outline-primary mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Achievements Tab -->
                <div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="achievements-tab">
                    <div class="row">
                        <!-- Achievement 1 -->
                        <div class="col-md-6">
                            <div class="card news-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="news-img" alt="School Achievement">
                                </div>
                                <div class="card-body p-4">
                                    <div class="news-date"><i class="far fa-calendar-alt me-2"></i>June 15, 2024</div>
                                    <h4 class="card-title">Modern School Ranks #1 in State Board Exams</h4>
                                    <p class="card-text">Our students have achieved outstanding results in the state board examinations, securing the top position for the third consecutive year. 95% of our students secured first division, with 15 students achieving perfect scores.</p>
                                    <a href="#" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Achievement 2 -->
                        <div class="col-md-6">
                            <div class="card news-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="news-img" alt="School Achievement">
                                </div>
                                <div class="card-body p-4">
                                    <div class="news-date"><i class="far fa-calendar-alt me-2"></i>June 1, 2024</div>
                                    <h4 class="card-title">School Cricket Team Wins State Championship</h4>
                                    <p class="card-text">Our school cricket team has won the state-level inter-school cricket championship for the second time in a row. The team displayed exceptional skills and sportsmanship throughout the tournament.</p>
                                    <a href="#" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Achievement 3 -->
                        <div class="col-md-6">
                            <div class="card news-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="news-img" alt="School Achievement">
                                </div>
                                <div class="card-body p-4">
                                    <div class="news-date"><i class="far fa-calendar-alt me-2"></i>May 20, 2024</div>
                                    <h4 class="card-title">Science Olympiad Winners</h4>
                                    <p class="card-text">Students from our school have won multiple awards at the National Science Olympiad. Three students secured gold medals, while five students received silver medals in various categories.</p>
                                    <a href="#" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Achievement 4 -->
                        <div class="col-md-6">
                            <div class="card news-card">
                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="news-img" alt="School Achievement">
                                </div>
                                <div class="card-body p-4">
                                    <div class="news-date"><i class="far fa-calendar-alt me-2"></i>May 10, 2024</div>
                                    <h4 class="card-title">Debate Competition Champions</h4>
                                    <p class="card-text">Our school debate team has emerged as champions in the Inter-School Debate Competition organized by the Education Department. The team won against 25 participating schools.</p>
                                    <a href="#" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <h2 class="mb-4">Stay Updated</h2>
            <p class="lead mb-4">Subscribe to our newsletter to receive the latest news and updates</p>
            <div class="newsletter-form">
                <div class="input-group mb-3">
                    <input type="email" class="form-control newsletter-input" placeholder="Enter your email address" aria-label="Email address">
                    <button class="btn newsletter-btn" type="button">Subscribe</button>
                </div>
                <p class="small">We respect your privacy and will never share your information.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- Article Modal -->
    <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-muted mb-3" id="modalDate"></div>
                    <img id="modalImage" class="img-fluid rounded mb-4" style="width: 100%; height: 300px; object-fit: cover;">
                    <p id="modalContent" class="article-content"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Article content data
        const articles = {
            'achievement1': {
                title: 'Modern School Ranks #1 in State Board Exams',
                date: 'June 15, 2024',
                image: 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `Modern School has once again proven its excellence in education by securing the top position in the state board examinations for the third consecutive year. This remarkable achievement reflects the dedication of our students, teachers, and the entire school community.

The results show that 95% of our students secured first division, with 15 students achieving perfect scores. This outstanding performance is a testament to our commitment to academic excellence and the quality of education we provide.

Key Highlights:
• 95% students secured first division
• 15 students achieved perfect scores
• 100% pass percentage
• Highest average score in the state

Our Principal, Dr. Sarah Johnson, expressed her pride in the students' achievements and credited the success to the combined efforts of students, teachers, and parents. She emphasized that this achievement motivates us to maintain our high standards and continue providing quality education.

The school management has announced special recognition for the teachers who have contributed to this success. A celebration ceremony will be held next week to honor the outstanding performers.`
            },
            'event1': {
                title: 'Annual Sports Day Celebration',
                date: 'June 10, 2024',
                image: 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `The Annual Sports Day celebration at Modern School was a grand success, showcasing the athletic prowess and sportsmanship of our students. The event, held on June 10, 2024, brought together students, teachers, and parents for a day filled with excitement and competitive spirit.

Highlights of the Sports Day:
• Track and field events
• Team sports competitions
• Individual athletic performances
• Special events for primary students
• Parent-teacher relay race

The day began with a spectacular opening ceremony featuring a march past by all houses, followed by the lighting of the sports torch. Students participated in various events including 100m sprint, long jump, relay races, and team sports like football and basketball.

Special recognition was given to outstanding performers:
• Best Athlete: John Smith (Class 10)
• Best Team: Blue House
• Most Improved: Sarah Johnson (Class 8)
• Sportsmanship Award: Michael Brown (Class 9)

The event concluded with a prize distribution ceremony, where winners were awarded medals and certificates. The Sports Day not only promoted physical fitness but also fostered team spirit and healthy competition among students.`
            },
            'announcement1': {
                title: 'Holiday Notice',
                date: 'June 20, 2024',
                image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `Modern School will remain closed on June 20, 2024, due to local elections. This decision has been made to ensure the safety of our students and staff during the election process.

Important Information:
• Date of Closure: June 20, 2024
• Date of Reopening: June 21, 2024
• Reason: Local Elections
• Affected: All classes and departments

The school administration has decided to close the campus to allow for the smooth conduct of elections in our area. This is a precautionary measure to ensure that our students and staff are not inconvenienced during the voting process.

All academic activities will resume as usual on June 21, 2024. Parents are requested to make appropriate arrangements for their children during this holiday.

For any urgent matters, please contact the school office at (123) 456-7890 or email info@modernschool.com.`
            },
            'event2': {
                title: 'Parent-Teacher Meeting',
                date: 'June 25, 2024',
                image: 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `The Annual Parent-Teacher Meeting at Modern School will be held on June 25, 2024, providing an important platform for parents and teachers to discuss student progress and academic performance.

Event Details:
• Date: June 25, 2024
• Time: 10:00 AM - 2:00 PM
• Venue: School Auditorium
• Duration: 15 minutes per student

The meeting will include:
• Individual progress reports
• Academic performance discussion
• Behavioral assessment
• Extracurricular activities review
• Future academic planning

Parents are requested to:
• Arrive 10 minutes before their scheduled time
• Bring their ID cards
• Review their child's recent work
• Prepare any specific questions

This meeting is crucial for maintaining the strong parent-teacher partnership that contributes to our students' success. We look forward to your active participation.`
            },
            'event3': {
                title: 'Annual Day Celebration',
                date: 'June 30, 2024',
                image: 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `Modern School's Annual Day Celebration will be a grand event showcasing the talents and achievements of our students. The celebration will be held on June 30, 2024, at the school ground.

Event Schedule:
• Opening Ceremony: 5:00 PM
• Cultural Performances: 5:30 PM
• Awards Ceremony: 7:00 PM
• Closing Ceremony: 8:30 PM

Highlights of the event:
• Dance performances
• Musical recitals
• Drama presentations
• Award distribution
• Special guest performances

The Annual Day will celebrate:
• Academic excellence
• Sports achievements
• Cultural accomplishments
• Community service
• Special recognition awards

Parents and guardians are cordially invited to attend this grand celebration of our students' achievements and talents.`
            },
            'event4': {
                title: 'Science Exhibition',
                date: 'July 5, 2024',
                image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `The Annual Science Exhibition at Modern School will showcase innovative projects and scientific experiments by our talented students. The exhibition will be held on July 5, 2024, in the School Science Block.

Exhibition Details:
• Date: July 5, 2024
• Time: 9:00 AM - 4:00 PM
• Venue: School Science Block
• Open to: Students, Parents, and Invited Guests

Project Categories:
• Environmental Science
• Renewable Energy
• Robotics
• Biotechnology
• Physics & Engineering
• Chemistry & Materials

The exhibition will feature:
• Working models
• Scientific demonstrations
• Interactive displays
• Research presentations
• Expert evaluations

This event aims to foster scientific curiosity and innovation among students while providing a platform to showcase their scientific knowledge and creativity.`
            },
            'event5': {
                title: 'Inter-School Debate Competition',
                date: 'July 15, 2024',
                image: 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `The Annual Inter-School Debate Competition will bring together talented debaters from top schools in the region. The competition will be held on July 15, 2024, in the School Auditorium.

Competition Details:
• Date: July 15, 2024
• Time: 10:00 AM - 5:00 PM
• Venue: School Auditorium
• Format: British Parliamentary Style

Topics for Debate:
• Technology and Education
• Environmental Conservation
• Social Media Impact
• Global Citizenship
• Future of Work

The competition will feature:
• Preliminary rounds
• Quarter-finals
• Semi-finals
• Grand finale
• Expert judging panel

This prestigious event provides a platform for students to develop their public speaking skills, critical thinking, and ability to present arguments effectively.`
            },
            'achievement2': {
                title: 'School Cricket Team Wins State Championship',
                date: 'June 1, 2024',
                image: 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `Modern School's cricket team has achieved a remarkable feat by winning the state-level inter-school cricket championship for the second consecutive year. The victory was secured on June 1, 2024, after an exciting final match.

Tournament Highlights:
• Undefeated run throughout the tournament
• Strong batting performances
• Excellent bowling attack
• Outstanding fielding
• Team spirit and sportsmanship

Key Players:
• Captain: Rahul Sharma (Class 12)
• Man of the Tournament: Priya Patel (Class 11)
• Best Bowler: Arjun Singh (Class 10)
• Best Batsman: Meera Gupta (Class 11)

The team's success is attributed to:
• Dedicated coaching
• Regular practice sessions
• Team coordination
• Strategic planning
• Support from school management

This achievement reflects our commitment to promoting sports excellence alongside academic success.`
            },
            'achievement3': {
                title: 'Science Olympiad Winners',
                date: 'May 20, 2024',
                image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `Students from Modern School have made us proud by winning multiple awards at the National Science Olympiad. The results were announced on May 20, 2024, showcasing our students' excellence in scientific knowledge and problem-solving.

Achievements:
• 3 Gold Medals
• 5 Silver Medals
• 2 Bronze Medals
• Best School Award
• Special Recognition for Innovation

Category-wise Winners:
Physics:
• Gold: Aditya Kumar (Class 12)
• Silver: Neha Sharma (Class 11)

Chemistry:
• Gold: Riya Patel (Class 12)
• Silver: Vikram Singh (Class 11)

Biology:
• Gold: Ananya Gupta (Class 12)
• Silver: Raj Malhotra (Class 11)

The success is attributed to:
• Dedicated teachers
• Regular practice sessions
• School's focus on scientific education
• Student dedication
• Parent support

These achievements highlight our commitment to excellence in science education.`
            },
            'achievement4': {
                title: 'Debate Competition Champions',
                date: 'May 10, 2024',
                image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `Modern School's debate team has emerged victorious in the Inter-School Debate Competition organized by the Education Department. The team won against 25 participating schools on May 10, 2024.

Competition Highlights:
• Topic: "Technology in Education"
• Format: British Parliamentary Style
• Duration: 3 days
• Participants: 25 schools
• Judges: Eminent educationists

Team Members:
• Team Captain: Aisha Khan (Class 12)
• First Speaker: Rohan Mehta (Class 11)
• Second Speaker: Priya Singh (Class 12)
• Reserve: Arjun Patel (Class 11)

The team's success is attributed to:
• Thorough research
• Strong arguments
• Effective delivery
• Quick thinking
• Team coordination

This victory demonstrates our commitment to developing students' communication and critical thinking skills.`
            },
            'announcement2': {
                title: 'Exam Schedule',
                date: 'June 18, 2024',
                image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `The mid-term examination schedule for all classes has been published. Students and parents are requested to check the school portal for detailed information.

Key Information:
• Examination Period: July 5-15, 2024
• Results Declaration: July 25, 2024
• Parent-Teacher Meeting: July 30, 2024

The examination schedule includes:
• Detailed day-wise timetable
• Subject-wise duration
• Practical examination dates
• Project submission deadlines

Important Guidelines:
• Students must carry their ID cards
• No electronic devices allowed in examination halls
• Arrive 30 minutes before the scheduled time
• Follow the dress code

The school portal will be updated with any changes to the schedule. Students are advised to check the portal regularly for updates.`
            },
            'announcement3': {
                title: 'New Faculty',
                date: 'June 15, 2024',
                image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `Modern School is pleased to welcome our new faculty members who will be joining the school from the upcoming academic year. These experienced educators will bring fresh perspectives and expertise to our teaching staff.

New Faculty Members:
• Dr. Priya Sharma - Physics Department
• Mr. Rajesh Kumar - Mathematics Department
• Ms. Ananya Patel - English Department
• Dr. Vikram Singh - Biology Department
• Ms. Neha Gupta - Computer Science Department

Qualifications and Experience:
• All new faculty members hold advanced degrees in their respective fields
• Combined teaching experience of over 50 years
• Specialized in innovative teaching methodologies
• Experienced in handling diverse student populations

The school management is confident that these additions will further enhance the quality of education at Modern School. A formal introduction ceremony will be held on the first day of the new academic year.`
            },
            'announcement4': {
                title: 'Online Classes',
                date: 'June 12, 2024',
                image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `Modern School will conduct online classes for students who are unable to attend school due to health reasons. This initiative ensures that no student falls behind in their academic progress.

Online Learning Details:
• Platform: School's Learning Management System
• Schedule: Synchronous with regular classes
• Duration: Until student returns to school
• Subjects: All core subjects

Requirements for Students:
• Stable internet connection
• Computer or tablet with camera
• Quiet study environment
• Parental supervision for younger students

Process for Enrollment:
• Contact the class teacher
• Submit a medical certificate if applicable
• Receive login credentials
• Attend orientation session

The school's IT department will provide technical support to ensure smooth online learning experience. Parents are requested to coordinate with class teachers for any specific requirements.`
            },
            'announcement5': {
                title: 'Transport Update',
                date: 'June 10, 2024',
                image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `The school bus routes have been updated for the new academic year. Parents and students are requested to check the new schedule on the school website.

Transportation Updates:
• New routes added for growing residential areas
• Updated timings for better traffic management
• New bus stops for convenience
• Improved safety measures

Important Information:
• Route maps available on school website
• Contact transport coordinator for specific queries
• Bus passes must be renewed by June 25, 2024
• New students must register for bus service

Safety Guidelines:
• Students must carry bus passes
• Parents must inform about absence in advance
• Follow seating arrangements
• Maintain discipline during travel

The school transport department is committed to providing safe and reliable transportation services to all students. For any queries, please contact the transport office at (123) 456-7891.`
            },
            'announcement6': {
                title: 'Library Hours',
                date: 'June 8, 2024',
                image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                content: `The school library will remain open until 6:00 PM on weekdays and 2:00 PM on Saturdays for students preparing for exams. This extended schedule is to support students in their academic preparation.

Library Schedule:
• Weekdays: 8:00 AM - 6:00 PM
• Saturdays: 9:00 AM - 2:00 PM
• Sundays: Closed

Available Resources:
• Textbooks and reference materials
• Previous years' question papers
• Study guides and notes
• Digital resources and e-books
• Quiet study areas

Library Rules:
• Maintain silence
• No food or drinks allowed
• Return books on time
• Follow the seating arrangement
• Use digital resources responsibly

The library staff is available to assist students with finding resources and using digital tools. Students are encouraged to make the most of these extended hours for their exam preparation.`
            }
        };

        // Function to show article modal
        function showArticle(title, date, content, image) {
            const modal = new bootstrap.Modal(document.getElementById('articleModal'));
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalDate').textContent = date;
            document.getElementById('modalImage').src = image;
            document.getElementById('modalContent').textContent = content;
            modal.show();
        }

        // Add click handlers to all Read More and Learn More buttons
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn-outline-primary');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const card = this.closest('.card');
                    const title = card.querySelector('.card-title').textContent;
                    const date = card.querySelector('.news-date, .event-date').textContent;
                    const image = card.querySelector('img')?.src || 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80';
                    
                    // Find matching article content
                    let articleKey = '';
                    for (const key in articles) {
                        if (articles[key].title === title) {
                            articleKey = key;
                            break;
                        }
                    }
                    
                    if (articleKey && articles[articleKey]) {
                        showArticle(
                            articles[articleKey].title,
                            articles[articleKey].date,
                            articles[articleKey].content,
                            articles[articleKey].image
                        );
                    } else {
                        // Fallback for any unmatched articles
                        showArticle(
                            title,
                            date,
                            'Detailed article content coming soon...',
                            image
                        );
                    }
                });
            });
        });
    </script>
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