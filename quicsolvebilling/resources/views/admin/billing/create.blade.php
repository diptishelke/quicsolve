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
    <link rel="stylesheet" href="assets/lib/select2/css/select2.min.css">
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
          <a href="javascript:void(0)" class="aside-logo bg-white rounded pd-5">
            <img class="navbar-brand" src="assets/img/logo.png" height="45" alt="QuicSolv" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="javascript:void(0)">Billing List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">DocsApp Billing</a>
              </li>
            </ul>
            <div class="ml-auto">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a href="login" class="nav-link">
                    <i class="feather-16 mg-x-5" data-feather="log-out"></i>
                    Logout
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
          <div class="row no-gutters">
            <div class="col-12 col-lg-12 col-xl-12 mg-t-10">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item">
                    <a href="/admin/dashboard">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                  Create Invoice
                  </li>
                </ol>
              </nav>
            </div>
            <div class="col-12 col-lg-12 col-xl-12 mg-t-10">
              <form id="create-billing-info-form" class="needs-validation" method="POST" action="{{url('insert')}}"enctype='multipart/form-data'>
              @csrf
                <div class="row no-gutters">
                  <div class="col-12 col-sm-12">
                    <div class="pd-10">
                      <fieldset class="form-fieldset mg-b-0">
                        <legend>Create Invoice</legend>
                        <div class="row row-sm mg-b-10">
                          <div class="col-12 col-md-4 form-group mg-sm-t-0">
                            <label for="vertical">Vertical:</label>
                            <input type="text" class="form-control" id="vertical" name="vertical" maxlength="45">
                         
                            <div class="invalid-feedback">This is required</div>
                          </div>
                          <div class="col-12 col-md-4 form-group mg-sm-t-0">
                            <label for="claim_Number">Claim Number:</label>
                            <input type="text" class="form-control" id="claim_Number" name="claim_number" maxlength="45">
                         
                            <div class="invalid-feedback">This is required</div>
                          </div>
                          <div class="col-12 col-md-4 form-group mg-sm-t-0">
                            <label for="state_code">State Code:</label>
                            <input type="text" class="form-control" id="state_code" name="state_code" maxlength="45">
                         
                            <div class="invalid-feedback">This is required</div>
                          </div>
                        <div class="row row-sm mg-b-10">
                          <div class="col-12 col-md-4 form-group mg-sm-t-0">
                            <label for="state">State:</label>
                            <input type="text" class="form-control" rows="2" name="state_name">
                            <div class="invalid-feedback">This is required</div>
                          </div>
                          
                          <div class="col-12 col-md-4 form-group mg-sm-t-0">
                            <label for="gstn">Bagic GSTN:</label>
                            <input type="text" class="form-control" rows="2" name="gst_no">
                            <div class="invalid-feedback">This is required</div>
                          </div>
                            
                          <div class="col-12 col-md-4 form-group mg-sm-t-0">
                            <label for="rate">Rate:</label>
                            <input type="text" class="form-control" rows="2" name="rate">
                            <div class="invalid-feedback">This is required</div>
                          </div>
                            
                          <div class="col-12 col-md-4 form-group mg-sm-t-0">
                            <label for="total_invoice_amount">Total_invoice_amount:</label>
                            <input type="text" class="form-control" rows="2" name="total_invoice_amount">
                            <div class="invalid-feedback">This is required</div>
                          </div>
                          
                          <div class="col-12 col-md-4 form-group mg-sm-t-0">
                            <label for="billing_name">Billing Name:</label>
                            <input type="text" class="form-control"name="billing_name" rows="2" name="billing_name">
                            <div class="invalid-feedback">This is required</div>
                          </div>
                          <div class="col-12 col-md-8 form-group mg-sm-t-0">
                            <label for="billing_address">Billing Address:</label>
                            <input type="text" class="form-control"name="billing_address" rows="2" name="billing_address">
                            <div class="invalid-feedback">This is required</div>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-12 mg-y-20">
                    <div class=" wd-100p d-flex flex-column flex-sm-row justify-content-center">
                      <button type="submit" class="btn btn-primary btn-sm mg-b-5 mg-sm-b-0">
                        Submit
                      </button>
                      <button type="reset" class="btn btn-secondary btn-sm mg-sm-l-5">
                        Cancel
                      </button>
                    </div>
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
    <script src="assets/lib/feather-icons/f    eather.min.js"></script>
    <script src="assets/js/billing.js"></script>
    <script src="assets/js/billing.aside.js"></script>
    <script>
      feather.replace()
    </script>
</body>

</html>