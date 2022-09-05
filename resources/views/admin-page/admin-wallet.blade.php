<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wallet List</title>

    <!-- Custom fonts for this template-->
    <link href={{ URL::asset('vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ URL::asset('css/sb-admin-2.min.css') }} rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href={{ url('/admin') }}>
                <div class="sidebar-brand-text mx-3">iLux</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href={{ url('/admin') }}>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Order List -->
            <li class="nav-item">
                <a class="nav-link" href={{ url('/admin/orders') }}>
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Order List</span></a>
            </li>

            <!-- Nav Item - Wallet List -->
            <li class="nav-item">
                <a class="nav-link" href={{ url('/admin/wallets') }}>
                    <i class="fas fa-fw fa-table"></i>
                    <span>Wallet List</span></a>
            </li>

            <!-- Nav Item - Luxxy -->
            <li class="nav-item">
                <a class="nav-link" href={{ url('/admin/luxy') }}>
                    <i class="fas fa-fw fa-table"></i>
                    <span>Luxy</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Wallet List</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        Add Amount
                    </button><br>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Amount</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="adminKey" name="$adminKey" placeholder="Admin Key">
                                            <input type="text" class="form-control form-control-user"
                                                id="user_id" name="$user_id" placeholder="User ID">
                                            <input type="number" class="form-control form-control-user"
                                                id="amount"name="$amount" placeholder="Amount to be Added">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>wallet_id</th>
                                            <th>user_id</th>
                                            <th>balance</th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        use App\Http\Controllers\AdminPanelController;
                                        $query = new AdminPanelController();
                                        ?>
                                        @foreach ($query->displayWallets() as $record)
                                            <tr>
                                                <td>{{ $record->wallet_id }}</td>
                                                <td>{{ $record->user_id }}</td>
                                                <td>{{ $record->balance }}</td>
                                                <td>{{ $record->created_at }}</td>
                                                <td>{{ $record->updated_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src={{ URL::asset('vendor/jquery/jquery.min.js') }}></script>
    <script src={{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ URL::asset('js/sb-admin-2.min.js') }}></script>

    <!-- Page level plugins -->
    <script src={{ URL::asset('vendor/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.js') }}></script>

    <!-- Page level custom scripts -->
    <script src={{ URL::asset('js/demo/datatables-demo.js') }}></script>

</body>

</html>
