<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Perpustakaan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?= BASE_URL; ?>assets/dist/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link href="<?= BASE_URL; ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="<?= BASE_URL; ?>assets/fontawesome/css/brands.css" rel="stylesheet">
        <link href="<?= BASE_URL; ?>assets/fontawesome/css/solid.css" rel="stylesheet">

        <!-- Datepicker -->
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css">
        <!-- End Datepicker -->

        <!-- Datatables -->
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/plugins/datatables2/css/dataTables.bootstrap4.css"/>
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/plugins/fixedheader/css/fixedHeader.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/plugins/responsive/css/responsive.bootstrap.min.css">
        <!-- End Datatables -->

        <!-- Select -->
        <link rel="stylesheet" href="<?= BASE_URL ?>assets/plugins/bootstrap-select3/dist/css/bootstrap-select.min.css">
        <!-- End Select -->

        <!-- Fullcalendar -->
        <link href="<?= BASE_URL ?>assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" />
        <!-- End Full Calendar -->

        <!-- Dashboard -->
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/dist/css/dashboard.css">


        <!-- ============================================================================================== -->

        <!-- Javascript -->

        <!-- Bootstrap -->
        <script src="<?= BASE_URL; ?>assets/js/jquery.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/dist/js/bootstrap.js"></script>

        <!-- Datepicker -->
        <script src="<?= BASE_URL; ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <!-- End Datepicker -->

        <!-- Select -->
        <script src="<?= BASE_URL ?>assets/plugins/bootstrap-select3/dist/js/bootstrap-select.min.js"></script>
        <!-- End Select -->

        <!-- Fullcalendar -->
        <script src="<?= BASE_URL ?>assets/plugins/momentjs/moment.min.js"></script>
        <script src="<?= BASE_URL ?>assets/plugins/fullcalendar/fullcalendar.min.js"></script>

        <script>
            $(document).ready(function() {
                // calendar
                $('#calendar').fullCalendar({
                    weekends: true, // will hide Saturdays and Sundays
                });
            })
        </script>
        <!-- End Full Calendar -->

        <!-- Data Tables -->
        <script type="text/javascript" src="<?= BASE_URL; ?>assets/plugins/datatables2/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?= BASE_URL; ?>assets/plugins/datatables2/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/plugins/fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/plugins/responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/plugins/responsive/js/responsive.bootstrap.min.js"></script>
        <!-- End Data Tables -->

    </head>
    <body>

        <div id="wrapper">

            <!-- Background -->
            <div class="background">
                
            </div>
            
            <!-- Sidenav -->
            <div id="sidebar-wrapper" class="">
                <div class="sidenav-header">
                    <div class="sidenav-logo row no-gutters text-white">
                        <h3>PERPUS</h3>
                    </div>
                    <div class="sidenav-user row">
                        <img src="<?= BASE_URL; ?>assets/img/2.png" width="80" height="80" class="rounded-circle mx-auto d-block" alt="...">
                        <div class="col-md-12 user-name">
                            <h6 class="text-center">admin</h6>
                        </div>
                    </div>
                </div>
                <nav class="sidenav">
                    <ul class="sidenav-items">
                        <?php if(URI_SEGMENT == "Beranda"){ ?>
                        <li class="side-item active"><a href="<?= BASE_URL; ?>Beranda"><i class="fas fa-home mr-2"></i> Beranda</a></li>
                        <?php }else{ ?>
                        <li class="side-item "><a href="<?= BASE_URL; ?>Beranda"><i class="fas fa-home mr-2"></i> Beranda</a></li>
                        <?php } ?>

                        <?php if(URI_SEGMENT == "Buku"){ ?>
                        <li class="side-item active"><a href="<?= BASE_URL; ?>Buku"><i class="fas fa-book mr-2"></i> Buku</a></li>
                        <?php }else{ ?>
                        <li class="side-item"><a href="<?= BASE_URL; ?>Buku"><i class="fas fa-book mr-2"></i> Buku</a></li>
                        <?php } ?>

                        <?php if(URI_SEGMENT == "Peminjam"){ ?>
                        <li class="side-item active"><a href="<?= BASE_URL; ?>Peminjam"><i class="fas fa-clipboard-list mr-2"></i> Data Peminjam</a></li>
                        <?php }else{ ?>
                        <li class="side-item"><a href="<?= BASE_URL; ?>Peminjam"><i class="fas fa-clipboard-list mr-2"></i> Data Peminjam</a></li>
                        <?php } ?>
                        
                        <?php if(URI_SEGMENT == "Terlambat"){ ?>
                        <li class="side-item active"><a href="<?= BASE_URL; ?>Terlambat"><i class="fas fa-clipboard-list mr-2"></i> Data Terlambat</a></li>
                        <?php }else{ ?>
                        <li class="side-item"><a href="<?= BASE_URL; ?>Terlambat"><i class="fas fa-clipboard-list mr-2"></i> Data Terlambat</a></li>
                        <?php } ?>

                        <?php if(URI_SEGMENT == "Kategori"){ ?>
                        <li class="side-item active"><a href="<?= BASE_URL; ?>Kategori"><i class="fas fa-box mr-2"></i> Kategori</a></li>
                        <?php }else{ ?>
                        <li class="side-item"><a href="<?= BASE_URL; ?>Kategori"><i class="fas fa-box mr-2"></i> Kategori</a></li>
                        <?php } ?>
                        <?php if(URI_SEGMENT == "Pengaturan"){ ?>
                        <li class="side-item active"><a href="<?= BASE_URL; ?>Pengaturan"><i class="fas fa-cogs mr-2"></i> Pengaturan</a></li>
                        <?php }else{ ?>
                        <li class="side-item"><a href="<?= BASE_URL; ?>Pengaturan"><i class="fas fa-cogs mr-2"></i> Pengaturan</a></li>
                        <?php }?>

                        <li class="side-item"><a href="<?= BASE_URL ?>login/keluar"><i class="fas fa-lock mr-2"></i> Keluar</a></li>
                    </ul>
                </nav>
                <div class="col-md-12">
                    <div class="menu-toogle mx-auto" id="menu-toogle">
                        <i class="fas fa-chevron-left fa-md text-white mx-auto icon-menu"></i>
                    </div>
                </div>
            </div>
            <!-- End Sidenav -->

            <!-- Page -->
            <div id="page-wrapper">
                <div class="container-fluid">

                    <!-- Menu Display Kecil -->
                    <div id="menu-kecil" class="row">
                        <div class="col-md-12 text-center menu-body">
                            <button class="btn btn-light">
                                <i class="fas fa-bars"></i> Menu
                            </button>
                        </div>
                        
                    </div>
                    <!-- End Menu Display Kecil -->

                    <!-- Page Header -->
                    <div class="page-header col-md-12">
                        
                        <div class="row text-white">
                            <h4><?= $data['header1'] ?></h4>
                        </div>
                        <div class="row text-white">
                            <p><?= $data['header2'] ?></p>
                        </div>
                    </div>
                    <!-- End Page Header -->