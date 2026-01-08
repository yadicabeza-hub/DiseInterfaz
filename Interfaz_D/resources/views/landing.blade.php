<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Prototype</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #333;
        }
        .navbar {
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        .hero-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 70vh;
            display: flex;
            align-items: center;
        }
        .hero-title {
            font-weight: 700;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
        }
        .hero-subtitle {
            font-size: 1.25rem;
            color: #666;
            margin-bottom: 2rem;
        }
        .service-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            overflow: hidden;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .icon-box {
            width: 60px;
            height: 60px;
            background-color: #0d6efd;
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }
        footer {
            padding: 50px 0;
            background-color: #212529;
            color: #adb5bd;
        }
        .btn-primary {
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <span class="text-primary">WEB</span>DESIGN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('form_design') }}">Form Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard_design') }}">Dashboard</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="#">Get Started</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center text-lg-start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Experience the Future of Design</h1>
                    <p class="hero-subtitle">Create stunning, responsive, and user-friendly web applications with our modern design system built on top of Bootstrap 5.</p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <button class="btn btn-primary btn-lg">Explore Now</button>
                        <button class="btn btn-outline-dark btn-lg">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://img.freepik.com/free-vector/user-interface-design-concept-with-tablet_23-2148498226.jpg" alt="Design Concept" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase">Our Expertise</h6>
                <h2 class="display-5 fw-bold">Premium Services</h2>
                <p class="text-muted">We provide full-spectrum design and development solutions for your business.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 service-card p-4 shadow-sm text-center">
                        <div class="icon-box mx-auto">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4 class="fw-bold">Visual Design</h4>
                        <p class="text-muted">Creating visually stunning interfaces that capture attention and represent your brand identity perfectly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 service-card p-4 shadow-sm text-center">
                        <div class="icon-box mx-auto bg-success">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4 class="fw-bold">Web Development</h4>
                        <p class="text-muted">High-performance web applications built with the latest technologies and best practices.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 service-card p-4 shadow-sm text-center">
                        <div class="icon-box mx-auto bg-warning">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4 class="fw-bold">Responsive Layouts</h4>
                        <p class="text-muted">Mobile-first designs that work seamlessly across all devices, from smartphones to desktops.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h4 class="text-white fw-bold mb-4">WEB DESIGN</h4>
                    <p>Elevating digital experiences through innovative design and cutting-edge technology.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-light fs-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light fs-4"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 mb-4">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Services</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5 class="text-white mb-4">Company</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">News</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Careers</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Privacy</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Terms</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Subscribe to our newsletter for the latest updates.</p>
                    <div class="input-group mt-3">
                        <input type="email" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Join</button>
                    </div>
                </div>
            </div>
            <hr class="mt-5 mb-4 border-secondary">
            <p class="text-center mb-0 small text-muted">&copy; 2024 Web Design Exercise. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
