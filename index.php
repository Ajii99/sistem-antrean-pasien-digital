<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Aplikasi Antrian Pengunjung</title>
    <link rel="shortcut icon" href="pengunjung/assets/img/favicon.ico">
    <link rel="stylesheet" href="pengunjung/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="pengunjung/assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="pengunjung/assets/fonts/fonts.googleapis.com.css">
    <link rel="stylesheet" href="pengunjung/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style">
    <link rel="stylesheet" href="pengunjung/assets/css/style.css">
    <style>
        /* Additional custom styles for responsiveness */
        @media (max-width: 767px) {
            /* Adjust styles for smaller screens */
            .page-content {
                padding: 30px 15px;
            }
            .small-box {
                margin-bottom: 20px;
            }
            .footer {
                font-size: 14px;
                margin-top: 20px;
            }
            .footer a {
                color: #000000; /* Change anchor text color to black */
            }
        }
    </style>
</head>
<body class="no-skin">
    <div class="main-container" id="main-container">
        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content">
                    <div class="page-header">
                        <div class="alert alert-purple" style="background-color: #55565B; color: #FFFFFF;">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <i style="margin-right:5px" class="ace-icon fa fa-info-circle"></i> Selamat Datang di <b>Aplikasi Antrian Pengunjung</b>. Silahkan pilih halaman yang ingin ditampilkan.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-xs-6">
                                    <div class="small-box bg-pink">
                                        <div class="inner">
                                            <h3 style="font-size:22px"> Nomor Antrian </h3>
                                        </div>
                                        <div class="icon-set-page">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <a href="pengunjung" class="small-box-footer">Pilih <i style="margin-left:5px" class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-xs-6">
                                    <div class="small-box bg-blue">
                                        <div class="inner">
                                            <h3 style="font-size:22px"> Dashboard Antrian </h3>
                                        </div>
                                        <div class="icon-set-page">
                                            <i class="fa fa-dashboard"></i>
                                        </div>
                                        <a href="dashboard" class="small-box-footer">Pilih <i style="margin-left:5px" class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-xs-6">
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <h3 style="font-size:22px"> Petugas </h3>
                                        </div>
                                        <div class="icon-set-page">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <a href="petugas" class="small-box-footer">Pilih <i style="margin-left:5px" class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </div><!-- /.main-content -->

        <footer class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="bigger-120 pull-left">
                        &copy; 2025 - <a href="https://telkomedika.co.id/telkomedika.co.id/index.html" style="color: #000000;">ELABS TELKOMEDIKA</a>
                    </span>
                </div>
            </div>
        </footer>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- Scripts -->
    <script src="pengunjung/assets/js/jquery.2.1.1.min.js"></script>
    <script>window.jQuery || document.write("<script src='pengunjung/assets/js/jquery.min.js'>"+"<"+"/script>");</script>
    <script src="pengunjung/assets/js/bootstrap.min.js"></script>
    <script src="pengunjung/assets/js/ace-elements.min.js"></script>
    <script src="pengunjung/assets/js/ace.min.js"></script>
</body>
</html>
