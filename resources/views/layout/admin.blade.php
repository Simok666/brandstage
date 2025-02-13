<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">{!! "\n" !!}
    <title>@yield("title")</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/icon/favicon-32x32.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- <link href="{{ asset('img/logo/logo-kemenhub.png') }}" rel="icon"> -->

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/toastify/toastify.css') }}">
    {{-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> --}}
    @yield('styles')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            {{-- <div class="row"> --}}
                                {{-- <div class="col-4"> --}}
                                    {{-- <img src="{{ asset('icon/icon-4.png') }}" style="height: 150px" alt=""> --}}
                                {{-- </div> --}}
                                {{-- <div class="col-8">
                                    <h3>Penilaian Perpustakaan</h3>
                                </div> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="toggler">
                            <a href="" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    @yield('sidebar-menu')
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        {{-- <li class="sidebar-item  ">
                            <a href="dashboard.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url("users.html") }}" class="sidebar-link">
                                <i class="bi bi-person"></i>
                                <span>User</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url("libraries.html") }}" class="sidebar-link">
                                <i class="bi bi-book"></i>
                                <span>Libraries</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url("proofOfWork.html") }}" class="sidebar-link">
                                <i class="bi bi-lock"></i>
                                <span>Bukti Fisik</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url("komponent.html") }}" class="sidebar-link">
                                <i class="bi bi-collection"></i>
                                <span>Komponen</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url("verifikator.html") }}" class="sidebar-link">
                                <i class="bi bi-person-check"></i>
                                <span>Verifikator</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url("profile-perpustakaan.html") }}" class="sidebar-link">
                                <i class="bi bi-person"></i>
                                <span>Profile Perpustakaan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url("verifikator-desk.html") }}" class="sidebar-link">
                                <i class="bi bi-book"></i>
                                <span>Verifikator Desk</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            {{-- <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header> --}}
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600 display-user-name">John Ducky</h6>
                                            <p class="mb-0 text-sm text-gray-600 display-user-role">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            {{-- <div class="avatar avatar-md">
                                                <img src="assets/images/faces/1.jpg">
                                            </div> --}}
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li><a class="dropdown-item" href="#" onclick="deleteSession()">
                                            <i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>@yield('title_page')</h3>
                            <p class="text-subtitle text-muted">@yield('desc_page')</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                @yield('breadcrumb')
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    @yield('content')
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    {{-- <script src="{{ asset('admin/static/js/components/sidebar.js') }}" type="module"></script> --}}
    <script src="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/mazer.js') }}"></script>
    <script src="{{ asset('admin/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/toastify/toastify.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script>
        checkLogin()
    </script>
    @yield('scripts')
</body>

</html>
