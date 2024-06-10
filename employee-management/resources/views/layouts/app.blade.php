<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Management Karyawan')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container-fluid">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar">
            <div class="position-sticky">
                <a class="navbar-brand d-flex align-items-center justify-content-center py-3" href="{{ url('/') }}">
       
                </a>
                <ul class="nav flex-column">
                    
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('employees.index') ? 'active' : '' }}" aria-current="page" href="{{ route('employees.index') }}">
                            <i class="fas fa-list"></i>
                            Karyawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('attendances.index') ? 'active' : '' }}" aria-current="page" href="{{ route('attendances.index') }}">
                            <i class="fas fa-list"></i>
                            Kehadiran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('salaries.index') ? 'active' : '' }}" aria-current="page" href="{{ route('salaries.index') }}">
                            <i class="fas fa-list"></i>
                            Salary
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('classes.index') ? 'active' : '' }}" aria-current="page" href="{{ route('classes.index') }}">
                            <i class="fas fa-list"></i>
                            Kelas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('packages.index') ? 'active' : '' }}" aria-current="page" href="{{ route('packages.index') }}">
                            <i class="fas fa-list"></i>
                            Paket Anak
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- jQuery dan Bootstrap Bundle (termasuk Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
