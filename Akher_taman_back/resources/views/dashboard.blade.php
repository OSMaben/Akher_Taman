<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    @include('layout.dashBoard_header');
    <div class="container-fluid page-body-wrapper" style="padding: 0">
        @include('layout.sideBar');
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="d-xl-flex justify-content-between align-items-start">
                    <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
                    <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
                        <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-link text-gray py-0 border-right">7 Days</button>
                            <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
                            <button type="button" class="btn btn-link text-gray py-0">3 Month</button>
                        </div>
                        <div class="dropdown ms-0 ml-md-4 mt-2 mt-lg-0">
                            <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar me-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                                <h6 class="dropdown-header">Settings</h6>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content tab-transparent-content">
                            <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                                                <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                                                <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                                                <p class="mt-4 mb-0">Completed</p>
                                                <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="mb-2 text-dark font-weight-normal">Unique Visitors</h5>
                                                <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                                                <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                                                <p class="mt-4 mb-0">Increased since yesterday</p>
                                                <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                                                <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                                                <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                                                <p class="mt-4 mb-0">Increased since yesterday</p>
                                                <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                                                <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                                                <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                                                <p class="mt-4 mb-0">Decreased since yesterday</p>
                                                <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="footer-inner-wraper">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
<script src="js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>
