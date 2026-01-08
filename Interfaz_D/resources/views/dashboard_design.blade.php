<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard Design</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            background: #212529;
            color: #fff;
            transition: all 0.3s;
            position: fixed;
            z-index: 1000;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: #1a1e21;
        }
        #sidebar ul.components {
            padding: 20px 0;
        }
        #sidebar ul li a {
            padding: 12px 20px;
            font-size: 1rem;
            display: block;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.2s;
        }
        #sidebar ul li a:hover, #sidebar ul li.active a {
            color: #fff;
            background: #0d6efd;
        }
        #sidebar ul li a i {
            margin-right: 15px;
            width: 20px;
            text-align: center;
        }
        #content {
            width: calc(100% - 250px);
            margin-left: 250px;
            min-height: 100vh;
            transition: all 0.3s;
            padding: 30px;
        }
        .card-stats {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            transition: transform 0.2s;
        }
        .card-stats:hover {
            transform: translateY(-5px);
        }
        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 15px;
        }
        .table-container {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
        }
        .navbar-top {
            background: white;
            padding: 15px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            margin-bottom: 30px;
        }
        @media (max-width: 991.98px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #content {
                width: 100%;
                margin-left: 0;
            }
            #content.active {
                margin-left: 250px;
            }
            .sidebar-toggle {
                display: block !important;
            }
        }
        .sidebar-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            margin-right: 15px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><i class="fas fa-chart-line me-2"></i>AdminPro</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#"><i class="fas fa-home"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('landing') }}"><i class="fas fa-desktop"></i>Landing Page</a>
            </li>
            <li>
                <a href="{{ route('form_design') }}"><i class="fas fa-edit"></i>Form Design</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-users"></i>Users</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-cog"></i>Settings</a>
            </li>
            <li>
                <a href="/"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <!-- Top Navbar -->
        <nav class="navbar-top d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="sidebar-toggle" id="sidebarCollapse">
                    <i class="fas fa-bars"></i>
                </div>
                <h4 class="mb-0 fw-bold">Dashboard Overview</h4>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="position-relative">
                    <i class="far fa-bell fs-5 text-muted"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
                        3
                    </span>
                </div>
                <img src="https://i.pravatar.cc/40?u=admin" class="rounded-pill border" alt="Avatar">
            </div>
        </nav>

        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card card-stats h-100 p-4">
                    <div class="stat-icon bg-primary bg-opacity-10 text-primary">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <p class="text-muted mb-1 small text-uppercase fw-bold">Total Sales</p>
                    <h3 class="fw-bold mb-0">$24,500</h3>
                    <p class="text-success mb-0 small mt-2"><i class="fas fa-arrow-up me-1"></i>+12.5% from last month</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats h-100 p-4">
                    <div class="stat-icon bg-success bg-opacity-10 text-success">
                        <i class="fas fa-users"></i>
                    </div>
                    <p class="text-muted mb-1 small text-uppercase fw-bold">Active Users</p>
                    <h3 class="fw-bold mb-0">1,240</h3>
                    <p class="text-success mb-0 small mt-2"><i class="fas fa-arrow-up me-1"></i>+5.2% from last month</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats h-100 p-4">
                    <div class="stat-icon bg-info bg-opacity-10 text-info">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <p class="text-muted mb-1 small text-uppercase fw-bold">Projects</p>
                    <h3 class="fw-bold mb-0">86</h3>
                    <p class="text-muted mb-0 small mt-2"><i class="fas fa-minus me-1"></i>No change</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats h-100 p-4">
                    <div class="stat-icon bg-warning bg-opacity-10 text-warning">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <p class="text-muted mb-1 small text-uppercase fw-bold">Support Tickets</p>
                    <h3 class="fw-bold mb-0">12</h3>
                    <p class="text-danger mb-0 small mt-2"><i class="fas fa-arrow-up me-1"></i>+2 new today</p>
                </div>
            </div>
        </div>

        <!-- Data Table -->
        <div class="table-container shadow-sm mt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold mb-0">Recent Transactions</h5>
                <button class="btn btn-primary btn-sm">View All</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="border-0">Transaction ID</th>
                            <th class="border-0">User</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Date</th>
                            <th class="border-0">Amount</th>
                            <th class="border-0 text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#TRX-8902</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="fw-semibold">Alex Johnson</div>
                                </div>
                            </td>
                            <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Completed</span></td>
                            <td>Dec 18, 2024</td>
                            <td class="fw-bold">$125.00</td>
                            <td class="text-end">
                                <button class="btn btn-light btn-sm"><i class="fas fa-ellipsis-v"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#TRX-8903</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="fw-semibold">Sarah Williams</div>
                                </div>
                            </td>
                            <td><span class="badge bg-warning bg-opacity-10 text-warning rounded-pill">Pending</span></td>
                            <td>Dec 19, 2024</td>
                            <td class="fw-bold">$450.00</td>
                            <td class="text-end">
                                <button class="btn btn-light btn-sm"><i class="fas fa-ellipsis-v"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#TRX-8904</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="fw-semibold">Michael Brown</div>
                                </div>
                            </td>
                            <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill">Completed</span></td>
                            <td>Dec 19, 2024</td>
                            <td class="fw-bold">$89.99</td>
                            <td class="text-end">
                                <button class="btn btn-light btn-sm"><i class="fas fa-ellipsis-v"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#TRX-8905</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="fw-semibold">Emily Davis</div>
                                </div>
                            </td>
                            <td><span class="badge bg-danger bg-opacity-10 text-danger rounded-pill">Cancelled</span></td>
                            <td>Dec 20, 2024</td>
                            <td class="fw-bold">$1,200.00</td>
                            <td class="text-end">
                                <button class="btn btn-light btn-sm"><i class="fas fa-ellipsis-v"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarCollapse').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
            document.getElementById('content').classList.toggle('active');
        });
    </script>
</body>
</html>
