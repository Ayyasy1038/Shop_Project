<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Project Sistem Perpustakaan Sekolah">
    <meta name="author" content="Hafidz Ayyasy">
    <meta name="generator" content="Hugo 0.118.2">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  </head>
  <body>
  <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow me-0 fs-5" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/home"><h2>Shopedia</h2></a>


    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#"><h4><i class="bi bi-cart3"></i></h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="\home"><i class="bi bi-house-fill"></i> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="\tambahdata"><i class="bi bi-bag"></i> Produk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/Create"><i class="bi bi-gear"></i> Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-left"></i>Sign out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
  </header>
  <br>
    <main class="container">
    @yield('content')
    </main>
  </body>
</head>