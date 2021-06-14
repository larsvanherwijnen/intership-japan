<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="{{route('logout')}}">Sign out</a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-fixed">
                <ul class="nav flex-column mt-5">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin')}}">
                            <i class="fas fa-home mr-2"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminInterns')}}">
                            <i class="fas fa-users mr-2"></i>Interns
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminCompanies')}}">
                            <i class="fas fa-building mr-2"></i>Companies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminEducators')}}">
                            <i class="fas fa-school mr-2"></i>Educators
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminApprovals')}}">
                            <i class="fas fa-thumbs-up mr-2"></i>Approvals<span class="ml-2 badge">{{$toVerify}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-question mr-2"></i>FAQ
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
{{--            <div--}}
{{--                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">--}}
{{--                <h1 class="h2">Dashboard</h1>--}}
{{--                <div class="btn-toolbar mb-2 mb-md-0">--}}
{{--                    <div class="btn-group mr-2">--}}
{{--                        <button class="btn btn-sm btn-outline-secondary">Share</button>--}}
{{--                        <button class="btn btn-sm btn-outline-secondary">Export</button>--}}
{{--                    </div>--}}
{{--                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">--}}
{{--                        <span data-feather="calendar"></span>--}}
{{--                        This week--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
