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
                  <a href="javascript:void(0)" class="nav-link">
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
                  <a routerLink="/admin/dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Billing List Information</li>
              </ol>
            </nav>
          </div>
          <div class="col-12 col-lg-12 col-xl-12 mg-t-10">
            <div class="card">
              <div class=" card-header card-header-filter-list pd-y-10 d-md-flex align-items-center justify-content-between">
                <h5 class="mg-b-0">Invoice List</h5>
                <ul class="list-inline d-flex mg-t-20 mg-sm-t-10 mg-md-t-0 mg-b-0">
                  <li class="list-inline-item d-flex align-items-center mg-l-5 mg-x-15">
                    <label for="state" class="tx-medium mg-r-10 mg-b-0 tx-14 tx-lg-16">Total Invoice Paid:</label>
                    <div class="d-inline-block mg-r-5 tx-lg-16"> 0/18</div>
                  </li>
                  <li class="list-inline-item d-flex align-items-center mg-l-5">
                    <label for="state" class="tx-medium mg-r-10 mg-b-0 tx-14 tx-lg-16">Invoice Type:</label>
                    <select class="form-control wd-150">
                      <option value="-1">All</option>
                      <option value="1">Paid</option>
                      <option value="0">Non-Paid</option>
                    </select>
                  </li>
                  <li class="list-inline-item d-flex align-items-center mg-l-5">
                    <label for="state" class="tx-medium mg-r-10 mg-b-0 tx-14 tx-lg-16">State:</label>
                    <select class="form-control wd-150">
                      <option value="">All States</option>
                    </select>
                  </li>
                  <li class="list-inline-item d-flex align-items-center mg-l-5">
                    <button type="button" class="btn btn-primary btn-sm btn-uppercase">
                      Download as xlsx
                    </button>
                  </li>
                  <li class="list-inline-item d-flex align-items-center mg-l-5">
                    <button type="button" class="btn btn-primary btn-sm btn-uppercase">
                      Download Invoices as ZIP
                    </button>
                  </li>
                </ul>
              </div>
              <div class="card-body pos-relative pd-0">
                <div class="pd-x-20 pd-y-10">
                  <div class="table-responsive custom-table-list">
                    <table id="billing_list_info_table" class="table table-bordered table-sm" style="width: 100%">
                      <thead class="thead-secondary custom-thead">
                        <tr>
                          <th scope="col">Sr.</th>
                          <th scope="col">Invoice Number</th>
                          <th scope="col" class="table-action-header">Vertical</th>
                          <th scope="col">Claim Number</th>
                          <th scope="col">C. Location</th>
                          <th scope="col">State Code</th>
                          <th scope="col">State</th>
                          <th scope="col">BAGIC GSTN</th>
                          <th scope="col">T. Rate</th>
                          <th scope="col">IGST</th>
                          <th scope="col">CGST</th>
                          <th scope="col">SGST</th>
                          <th scope="col">T.Amt.</th>
                          <th scope="col">R.Amt.</th>
                          <th scope="col" class="table-action-header">Billing Name</th>
                          <th scope="col" class="table-action-header custom-table-action-header"> Billing Address</th>
                          <th scope="col" class="table-action-header">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>QS1234</td>
                          <td>Associate Support</td>
                          <td>OC-22-2416-1871-00000599</td>
                          <td>2416</td>
                          <td>27</td>
                          <td>MAHARASHTRA</td>
                          <td>27AABCB5730G1ZX</td>
                          <td>275</td>
                          <td>-</td>
                          <td>24.75</td>
                          <td>24.75</td>
                          <td>324.5</td>
                          <td>-</td>
                          <td>QuicSolv</td>
                          <td>Pune</td>
                          <td>
                            <a class="user_list_table_link" href="javascript:void(0)" data-toggle="modal">
                              <i class="feather-16" data-feather="download"></i>
                              <span class="d-none d-sm-inline mg-l-5">Download</span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>QS3124</td>
                          <td>Associate Support</td>
                          <td>OC-22-1871-2416-00000599</td>
                          <td>2641</td>
                          <td>28</td>
                          <td>MAHARASHTRA</td>
                          <td>27ABABC5730G1ZX</td>
                          <td>276</td>
                          <td>-</td>
                          <td>23.75</td>
                          <td>23.75</td>
                          <td>320.5</td>
                          <td>-</td>
                          <td>QuicSolv</td>
                          <td>Pune</td>
                          <td>
                            <a class="user_list_table_link" href="javascript:void(0)" data-toggle="modal">
                              <i class="feather-16" data-feather="download"></i>
                              <span class="d-none d-sm-inline mg-l-5">Download</span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>QS2431</td>
                          <td>Associate Support</td>
                          <td>OC-22-1187-2641-00000599</td>
                          <td>2164</td>
                          <td>38</td>
                          <td>MAHARASHTRA</td>
                          <td>27BAABC5730G1ZX</td>
                          <td>246</td>
                          <td>-</td>
                          <td>24.75</td>
                          <td>24.75</td>
                          <td>325.5</td>
                          <td>-</td>
                          <td>QuicSolv</td>
                          <td>Pune</td>
                          <td>
                            <a class="user_list_table_link" href="javascript:void(0)" data-toggle="modal">
                              <i class="feather-16" data-feather="download"></i>
                              <span class="d-none d-sm-inline mg-l-5">Download</span>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
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
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/lib/select2/js/select2.min.js"></script>
  <script src="assets/lib/feather-icons/feather.min.js"></script>
  <script src="assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/billing.js"></script>
  <!-- <script src="assets/js/billing.aside.js"></script> -->
  <script>
    feather.replace()
  </script>
  <script>
    $(document).ready(function() {
      $('#billing_list_info_table').DataTable({
        "paging":   true,
        "ordering": true,
        "info":     true
      });
    });
  </script>
</body>

</html>