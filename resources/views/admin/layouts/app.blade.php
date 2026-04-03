<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --sidebar-width: 250px;
            --header-height: 60px;
            --primary-color: #4e73df;
            --primary-hover: #2e59d9;
            --sidebar-bg: #4e73df;
            --sidebar-text: rgba(255, 255, 255, 0.8);
            --sidebar-hover: rgba(255, 255, 255, 0.1);
            --sidebar-active: rgba(255, 255, 255, 0.2);
        }

        body {
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f8f9fc;
        }

        /* Sidebar */
        #sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: var(--sidebar-bg);
            color: var(--sidebar-text);
            transition: all 0.3s;
            z-index: 1000;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }

        .sidebar-brand {
            height: var(--header-height);
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 800;
            padding: 1.5rem 1rem;
            text-align: center;
            letter-spacing: 0.05rem;
            z-index: 1;
            color: #fff;
            display: block;
            background: rgba(0, 0, 0, 0.1);
        }

        .sidebar-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            margin: 0 1rem 1rem;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: var(--sidebar-text);
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }

        .nav-link:hover {
            color: #fff;
            background: var(--sidebar-hover);
        }

        .nav-link.active {
            color: #fff;
            background: var(--sidebar-active);
            border-left-color: #fff;
        }

        .nav-link i {
            margin-right: 0.5rem;
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        #content {
            width: calc(100% - var(--sidebar-width));
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s;
        }

        /* Top Navigation */
        .topbar {
            height: var(--header-height);
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            background: #fff;
        }

        .topbar .dropdown-menu {
            position: absolute;
            right: 0;
            left: auto;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 0.35rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
            margin-bottom: 1.5rem;
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 1rem 1.35rem;
            font-weight: 600;
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        /* Tables */
        .table {
            margin-bottom: 0;
        }

        .table th {
            border-top: none;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.7rem;
            letter-spacing: 0.04em;
            color: #4e73df;
            background-color: #f8f9fc;
        }

        /* Badges */
        .badge {
            font-weight: 600;
            padding: 0.5em 0.8em;
        }

        /* Forms */
        .form-control:focus {
            border-color: #bac8f3;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        /* Responsive */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #content {
                width: 100%;
                margin-left: 0;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #content.active {
                margin-left: 250px;
                width: calc(100% - 250px);
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt me-2"></i>
            <span>Admin Panel</span>
        </a>
        <hr class="sidebar-divider">
        <!-- Nav Items -->
        <div class="sidebar-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
                       href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}" 
                       href="{{ route('admin.users.index') }}">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Users</span>
                    </a>
                </li>
                <!-- Add this after the Contact Messages menu item and before the closing </ul> tag -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}" 
                    href="{{ route('admin.blogs.index') }}">
                        <i class="fas fa-fw fa-newspaper"></i>
                        <span>Blog Posts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.blog-tags.*') ? 'active' : '' }}" 
                    href="{{ route('admin.blog-tags.index') }}">
                        <i class="fas fa-fw fa-tags"></i>
                        <span>Blog Tags</span>
                    </a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.vehicle-categories.*') ? 'active' : '' }}" 
                    href="{{ route('admin.vehicle-categories.index') }}">
                        <i class="fas fa-fw fa-tags"></i>
                        <span>Vehicle Categories</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.cars.*') ? 'active' : '' }}" 
                    href="{{ route('admin.cars.index') }}">
                        <i class="fas fa-fw fa-car"></i>
                        <span>Cars</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.car-enquiries.*') ? 'active' : '' }}" 
                    href="{{ route('admin.car-enquiries.index') }}">
                        <i class="fas fa-fw fa-question-circle"></i>
                        <span>Car Enquiries</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.cities.index') }}" class="nav-link {{ request()->is('admin/cities*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-city"></i>
                        <p>Cities</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.countries.index') }}" 
                    class="nav-link {{ request()->is('admin/countries*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>Countries</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}" 
                       href="{{ route('admin.contacts.index') }}">
                        <i class="fas fa-fw fa-envelope"></i>
                        <span>Contact Messages</span>
                        @php
                            $unreadCount = \App\Models\Contact::where('is_read', false)->count();
                        @endphp
                        @if($unreadCount > 0)
                            <span class="badge bg-danger rounded-pill ms-auto">{{ $unreadCount }}</span>
                        @endif
                    </a>
                </li>
                <!-- Add more menu items here -->
            </ul>
        </div>
    </div>

    <!-- Content Wrapper -->
    <div id="content">
        <!-- Top Navigation -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="me-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                        <img class="img-profile rounded-circle" width="32" height="32" 
                             src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=4e73df&color=fff">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                @yield('action_button')
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </div>
        <!-- /.container-fluid -->
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts -->
    <script>
        // Toggle the side navigation
        document.getElementById('sidebarToggleTop').addEventListener('click', function(e) {
            e.preventDefault();
            document.body.classList.toggle('sidebar-toggled');
            document.getElementById('sidebar').classList.toggle('active');
            document.getElementById('content').classList.toggle('active');
        });

        // Close any open menu accordions when window is resized below 768px
        window.addEventListener('resize', function() {
            if (window.innerWidth < 768) {
                document.getElementById('sidebar').classList.remove('active');
                document.getElementById('content').classList.remove('active');
            } else {
                document.getElementById('sidebar').classList.add('active');
                document.getElementById('content').classList.add('active');
            }
        });
    </script>
    <script>
    // Highlight active menu item
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        document.querySelectorAll('.nav-link').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });
</script>

    @stack('scripts')
</body>
</html>