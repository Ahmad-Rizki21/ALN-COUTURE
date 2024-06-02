<?php

    require "auth/crud.php";
    require "auth/conetions.php";
    require "auth/delete.php";
   
    try {
        $sql = "SELECT * FROM orders";
        $stmt = $pdo->query($sql);
        $orders = $stmt->fetchAll();
    
        if (empty($orders)) {
            echo "No orders found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard ALN.COUTURE</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/favicon-32x32.png" alt=""> </b>
                    <span class="logo-compact"><img src="images/favicon-32x32.png" alt=""></span>
                    <span class="brand-title">
                        <!-- <img src="images/logo-text.png" alt=""> -->
                            <h3>ALN.COUTURE</h3>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">

                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                                <span>English</span> <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Indonesia</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <!-- <span class="activity active"></span> -->
                                <img src="images/Capture.PNG" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.php"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.php"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="page-login.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./app-profile.php">Profile</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Information</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./layout-blank.php">Tabel Data ALN</a></li>
                            <!-- <li><a href="./layout-one-column.php">One Column</a></li> -->
                            <li><a href="./layout-two-column.php">Two column</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-lock.php">Lock Screen</a></li>
                            <li><a href="./page-error-404.php">Error 404</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Information</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel Data ALN</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data Customers Aln.Couture</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Code Baju</th>
                                                    <th>Size Baju</th>
                                                    <th>Alamat</th>
                                                    <th>Status Pengiriman</th>
                                                    <th>Status Pembayaran</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                                <!-- <Button><a href="form-input.php"  data-placement="top" title="Add">TAMBAH DATA</a></Button> -->
                                                <br>
                                                <a href="form-input.php"><button class="btn btn-primary" data-placement="top" type="submit">Tambah Data</button></a>
                                                
                                                <br>
                                            <tbody>
                                            <?php
                                                    if (!empty($orders)):
                                                        foreach ($orders as $order):
                                                        
                                                        ?>
                                                <tr>
                                                <td><?php echo htmlspecialchars($order['no']); ?></td>
                                                <td><?php echo htmlspecialchars($order['nama']); ?></td>
                                                <td><?php echo htmlspecialchars($order['code']); ?></td>
                                                <td><?php echo htmlspecialchars($order['size']); ?></td>
                                                <td><?php echo htmlspecialchars($order['alamat']); ?></td>
                                                <td><?php echo htmlspecialchars($order['status_pengiriman']); ?></td>
                                                <td><span class="label gradient-1 rounded"><?php echo htmlspecialchars($order['status_pembayaran']); ?></span></td>
                                                    
                                                    <td><span>

                                                       <!-- Button Untuk Edit -->     
                                                       <a href="edit-data.php"><button class="edit-btn btn btn-info btn-sm" data-id="<?php echo $order['no']; ?>" data-placement="top" type="button">Edit Data</button></a>
                                                       <!-- Button Untuk Edit -->     

                                                        <!-- Button Untuk Delete -->
                                                        <form method="post" action="auth/crud.php" style="display:inline;">
                                                            <input type="hidden" name="no" value="<?php echo $order['no']; ?>">
                                                            <button  class="delete-btn btn btn-danger btn-sm" name="delete" data-placement="top" type="submit" >Delate</button>
                                                        </form>
                                                        <!-- Button Untuk Delete -->

                                                    </span>
                                                    </td>
                                                <td>    
                                                </td>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Code Baju</th>
                                                    <th>Size Baju</th>
                                                    <th>Alamat</th>
                                                    <th>Status Pengiriman</th>
                                                    <th>Status Pembayaran</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script>
        $(document).ready(function() {
            $('.delete-btn').click(function() {
                var no = $(this).data('no');
                if (confirm('Lu Serius Mau Ngapus Data Ini Nge ?')) {
                    $.post('auth/delete.php', { no: no }, function(response) {
                        location.reload();
                    });
                }
            });
        });
    </script>

</body>

</html>