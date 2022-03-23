<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{('assets/lib/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{('assets/lib/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{('assets/css/billing.css')}}">
    <link rel="stylesheet" href="{{('assets/css/pages/auth.css')}}">
    <link rel="stylesheet" href="{{('assets/css/pages/calendar.css')}}">
    <link rel="stylesheet" href="{{('assets/css/pages/chat.css')}}">
    <link rel="stylesheet" href="{{('assets/css/pages/contacts.css')}}">
    <link rel="stylesheet" href="{{('assets/css/pages/dashboard.css')}}">
    <link rel="stylesheet" href="{{('assets/css/pages/filemgr.css')}}">
    <link rel="stylesheet" href="{{('assets/css/pages/landing.css')}}">
    <link rel="stylesheet" href="{{('assets/css/pages/profile.css')}}">
    <link rel="stylesheet" href="{{('assets/css/style.css')}}">
</head>
<body class="mat-typography">


<div class="content pd-0">
<div class="content-header d-flex justify-content-end align-items-center">
<header class="navbar-menu-wrapper">
<nav class="navbar navbar-expand-lg navbar-light wd-100p">
<a href="/admin" class="aside-logo bg-white rounded pd-5">
<img class="navbar-brand" src="assets/img/logo.png" height="45" alt="QuicSolv">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<div class="navbar-right ml-auto">
<ul class="navbar-nav">
<li class="nav-item active">
<a href="login" class="nav-link">
    <i-feather class="mg-x-5" name="log-in"></i-feather>
    Login
</a>
</li>
</ul>
</div>
</div>
</nav>
</header>
</div>
<div class="content-body pd-0">
<main class="container main-container pd-y-15" role="main">
<div class="container">
<div class="media align-items-stretch justify-content-center ht-100p">
<div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
<div class="pd-t-20 wd-100p">
<h4 class="tx-color-01 mg-b-5">Create New Account</h4>

<p class="tx-color-03 tx-16 mg-b-40">It's free to signup and only takes a minute.</p>


<form action="{{route('store')}}" method="POST"enctype='multipart/form-data'>
  @if(Session::has('success'))
  <div class="alert alert-success">{{Session::get('success')}}</div>
  @endif

    @csrf

<div class="form-group">
<label>Email address</label>
<input type="email" class="form-control" name="email_id" placeholder="Enter your email address">
</div>
<div class="form-group">
<div class="d-flex justify-content-between mg-b-5">
    <label class="mg-b-0-f">Password</label>
</div>
<input type="password"  class="form-control"name="password" placeholder="Enter your password">
</div>
<div class="form-group">
<label>Firstname</label>
<input type="text" class="form-control" name="first_name" placeholder="Enter your firstname">
</div>
<div class="form-group">
<label>Lastname</label>
<input type="text" class="form-control" name="last_name" placeholder="Enter your lastname">
</div>
<div class="form-group tx-12">
By clicking <strong>Create an account
</strong> below, you agree to our terms of service and privacy statement.
</div>
<button type="submit" class="btn btn-brand-02 btn-block">Create Account</button>
<div class="divider-text">or</div>
<div class="tx-13 mg-t-20 tx-center">Already have an account? 
<a href="login">Sign In</a>
</div>
</div>
</div>
<div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
<div class="mx-lg-wd-500 mx-xl-wd-550">
<img src="assets/img/signup.png" class="img-fluid" alt="">
</div>
</div>
</form>
</div>
</div>
</main>
<footer class="footer bg-light">
<div class="container-fluid">
<div class="row">
<div class="col-12"> &copy; All Rights Reserved</div>
</div>
</div>
</footer>
</div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{('assets/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{('assets/lib/select2/js/select2.min.js')}}"></script>
    <script src="{{('assets/lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{('assets/js/billing.js')}}"></script>
    <script src="{{('assets/js/billing.aside.js')}}"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>
