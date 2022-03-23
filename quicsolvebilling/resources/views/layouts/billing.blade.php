<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>QuicSolv</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/lib/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/lib/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/billing.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="stylesheet" href="assets/css/pages/calendar.css">
    <link rel="stylesheet" href="assets/css/pages/chat.css">
    <link rel="stylesheet" href="assets/css/pages/contacts.css">
    <link rel="stylesheet" href="assets/css/pages/dashboard.css">
    <link rel="stylesheet" href="assets/css/pages/filemgr.css">
    <link rel="stylesheet" href="assets/css/pages/landing.css">
    <link rel="stylesheet" href="assets/css/pages/profile.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="mat-typography">

    <div class="content pd-0">
        <div class="content-header d-flex justify-content-end align-items-center">
            <header class="navbar-menu-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light wd-100p">
                    <a href="/admin" class="aside-logo bg-white rounded pd-5">
                        <img class="navbar-brand" src="assets/img/logo.png" height="45" alt="QuicSolv">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-right ml-auto">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a href="/admin/login" class="nav-link">
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
                <div class="container mg-b-0">
                    <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
                        <div class="media-body align-items-center d-none d-lg-flex">
                            <div class="mx-wd-600 pd-lg-40">
                                <img src="assets/img/login_new.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <form novalidate method="POST" action="#">
                            <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                                <div class="wd-100p">
                                    <h3 class="tx-color-01 mg-b-5">Sign In</h3>
                                    <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="email" class="form-control" placeholder="username" id="username"
                                            required>
                                        <div class="invalid-feedback">Email id is required</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between mg-b-5">
                                            <label class="mg-b-0-f">Password</label>
                                            <a href="/admin/forgot-password" class="tx-13">Forgot password?</a>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Enter your password">
                                        <div class="invalid-feedback">Password is required</div>
                                    </div>
                                    <button type="submit" class="btn btn-brand-02 btn-block">Sign In</button>
                                    <div class="divider-text">or</div>
                                    <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a
                                            href="/admin/signup">Create an Account</a></div>
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
    <script src="assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/lib/feather-icons/feather.min.js"></script>
    <script src="assets/js/billing.js"></script>
    <script src="assets/js/billing.aside.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>