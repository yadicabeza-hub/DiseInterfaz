<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>SPA Center - Oasis de Bienestar y Belleza</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --coral-primary: #ff7c7c;
            --coral-hover: #ff6666;
            --dark-bg: #1e293b;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #334155;
            scroll-behavior: smooth;
        }

        .text-coral { color: var(--coral-primary) !important; }
        .bg-coral { background-color: var(--coral-primary) !important; }
        .btn-coral { background-color: var(--coral-primary); color: white; border: none; padding: 12px 30px; border-radius: 50px; font-weight: 600; transition: all 0.3s; }
        .btn-coral:hover { background-color: var(--coral-hover); color: white; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(255, 124, 124, 0.3); }
        .btn-outline-coral { border: 2px solid var(--coral-primary); color: var(--coral-primary); background: transparent; padding: 12px 30px; border-radius: 50px; font-weight: 600; transition: all 0.3s; }
        .btn-outline-coral:hover { background: var(--coral-primary); color: white; }

        /* Navbar */
        .navbar { transition: all 0.3s; border-bottom: 1px solid rgba(0,0,0,0.05); }
        .nav-link { font-weight: 500; color: #64748b !important; padding: 1rem 1.5rem !important; }
        .nav-link:hover, .nav-link.active { color: var(--coral-primary) !important; }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(30, 41, 59, 0.7), rgba(30, 41, 59, 0.7)), url('https://images.unsplash.com/photo-1540555700478-4be289fbecef?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            height: 90vh;
            display: flex;
            align-items: center;
            color: white;
        }

        /* Features */
        .feature-card { border-radius: 20px; transition: all 0.3s; border: none; padding: 2rem; }
        .feature-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .feature-icon { width: 70px; height: 70px; border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 1.5rem; }

        /* Footer */
        .footer { background-color: var(--dark-bg); color: rgba(255,255,255,0.7); }
        .footer h5 { color: white; font-weight: 700; margin-bottom: 1.5rem; }
        .footer-link { color: rgba(255,255,255,0.6); text-decoration: none; transition: all 0.3s; }
        .footer-link:hover { color: var(--coral-primary); padding-left: 5px; }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top bg-white">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <div class="bg-coral p-2 rounded text-white me-2" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-spa small"></i>
                </div>
                <h3 class="m-0 fw-bold"><span class="text-dark">SPA</span> <span class="text-coral">Center</span></h3>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
                <div class="d-flex gap-2">
                    @auth
                        <a href="{{ url('/admin/dashboard') }}" class="btn btn-coral shadow-sm">Mi Panel</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-coral">Ingresar</a>
                        <a href="{{ route('register') }}" class="btn btn-coral shadow-sm">Registrarse</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header class="hero-section text-center text-md-start">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h6 class="text-coral text-uppercase fw-bold mb-3" style="letter-spacing: 5px;">Tu Oasis de Paz</h6>
                    <h1 class="display-2 fw-bold mb-4">Rejuvenece tú Cuerpo y Alma</h1>
                    <p class="lead mb-5 opacity-90">Descubre una experiencia de relajación total con nuestros expertos en bienestar. Terapias diseñadas para renovar tu energía.</p>
                    <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                        <a href="#servicios" class="btn btn-coral rounded-pill btn-lg px-5">Ver Servicios</a>
                        <a href="#contacto" class="btn btn-outline-light rounded-pill btn-lg px-5 border-2">Reservar Cita</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Features -->
    <section class="py-5 bg-light" id="servicios">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h6 class="text-coral text-uppercase fw-bold mb-2">Nuestras Terapias</h6>
                <h2 class="display-5 fw-bold">Servicios Diseñados para Ti</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100 shadow-sm bg-white">
                        <div class="feature-icon bg-coral-light text-coral">
                            <i class="fas fa-hand-sparkles"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Masajes Terapéuticos</h4>
                        <p class="text-muted">Alivia el estrés y la tensión muscular con nuestras técnicas milenarias de relajación profunda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 shadow-sm bg-white">
                        <div class="feature-icon bg-primary-light text-primary" style="background-color: rgba(13, 110, 253, 0.1);">
                            <i class="fas fa-smile"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Tratamientos Faciales</h4>
                        <p class="text-muted">Devuelve el brillo natural a tú piel con productos orgánicos y tecnología de vanguardia.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 shadow-sm bg-white">
                        <div class="feature-icon bg-success-light text-success" style="background-color: rgba(25, 135, 84, 0.1);">
                            <i class="fas fa-hot-tub-person"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Circuitos de Agua</h4>
                        <p class="text-muted">Sumerge tus sentidos en nuestras piscinas termales y saunas para una desintoxicación completa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-5" id="contacto">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a class="navbar-brand d-flex align-items-center mb-4" href="/">
                        <div class="bg-coral p-2 rounded text-white me-2" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-spa small"></i>
                        </div>
                        <h3 class="m-0 fw-bold text-white">SPA Center</h3>
                    </a>
                    <p class="mb-4">Construyendo un oasis de paz y belleza. Únase a nosotros y descubra el secreto del bienestar total.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-light rounded-circle shadow-sm" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-facebook-f text-dark"></i></a>
                        <a href="#" class="btn btn-light rounded-circle shadow-sm" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-instagram text-dark"></i></a>
                        <a href="#" class="btn btn-light rounded-circle shadow-sm" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-twitter text-dark"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Inicio</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Servicios</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Nosotros</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Citas</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-map-marker-alt text-coral me-3"></i> San Lorenzo-Esmeraldas</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-phone-alt text-coral me-3"></i> (593) 0988631348</li>
                        <li class="mb-0 d-flex align-items-center"><i class="fas fa-envelope text-coral me-3"></i> yadicabeza96@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Boletín</h5>
                    <p class="small mb-3">Suscríbete para recibir ofertas exclusivas.</p>
                    <div class="input-group">
                        <input type="email" class="form-control border-0 px-3" placeholder="Tu email" style="border-radius: 10px 0 0 10px;">
                        <button class="btn btn-coral" style="border-radius: 0 10px 10px 0;">OK</button>
                    </div>
                </div>
            </div>
            <hr class="my-5 opacity-10">
            <div class="text-center small">
                &copy; {{ date('Y') }} SPA Center Oasis. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
