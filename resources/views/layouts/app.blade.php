<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">Welcome</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="/home">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="/about">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="/program">Program</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="/team">Team</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="/kontak/Asri">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
