<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />
    <title>Grass Jerry</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/icon.css" type="text/css" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
    <link rel="stylesheet" href="css/showpd.css" />
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>

<body class="">



<section class="vbox">

        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="index.html" class="navbar-brand">
                    <!--<img src="images/logo.png" class="m-r-sm" alt="scale">-->
                    <span class="hidden-nav-xs">Grass Jerry</span>
                </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                    <i class="fa fa-cog"></i>
                </a>
            </div>


            <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
                        </span>
                        <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects...">
                    </div>
                </div>
            </form>

        </header>
        <section>

            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav nav-main" data-ride="collapse">
                                        <div class="line dk hidden-nav-xs"></div>
                                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Home</div>
                                        <li class="active">
                                            <a href="index.php" class="auto">
                                                <i class="fa fa-home"></i>
                                                </i>
                                                <span class="font-bold">หน้าแรก</span>
                                            </a>
                                        </li>

                                        <div class="line dk hidden-nav-xs"></div>
                                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Product</div>

                                        <li>
                                            <a href="#" class="auto">
                                                <span class="pull-right text-muted">
                                                    <i class="i i-circle-sm-o text"></i>
                                                    <i class="i i-circle-sm text-active"></i>
                                                </span>


                                                <i class="i i-docs icon"></i>
                                                <span class="font-bold">สินค้า</span>
                                            </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="showpd.php" class="auto">
                                                        <i class="i i-dot"></i>

                                                        <span>รายละเอียดสินค้า</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                        <div class="line dk hidden-nav-xs"></div>
                                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Stock</div>

                                        <li>
                                            <a href="#" class="auto">
                                                <span class="pull-right text-muted">
                                                    <i class="i i-circle-sm-o text"></i>
                                                    <i class="i i-circle-sm text-active"></i>
                                                </span>

                                                <i class="i i-lab icon">
                                                </i>
                                                <span class="font-bold">คลังสินค้า</span>
                                            </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="Sumpd.php" class="auto">
                                                        <i class="i i-dot"></i>

                                                        <span>สรุปยอดการนำเข้าและส่งออก</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="Manufacturepd.php" class="auto">

                                                        <i class="i i-dot"></i>

                                                        <span>ยอดการนำเข้า</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="Exportpd.php" class="auto">
                                                        <i class="i i-dot"></i>

                                                        <span>ยอดการส่งออก</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <div class="line dk hidden-nav-xs"></div>
                                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Account</div>

                                        <li>
                                            <a href="#" class="auto">
                                                <span class="pull-right text-muted">
                                                    <i class="i i-circle-sm-o text"></i>
                                                    <i class="i i-circle-sm text-active"></i>
                                                </span>


                                                <i class="i i-docs icon"></i>
                                                <span class="font-bold">ระบบบัญชี</span>
                                            </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="sp_improduct.php" class="auto">
                                                        <i class="i i-dot"></i>

                                                        <span>นำเข้าสินค้า</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="sp_exbillproduct.php" class="auto">
                                                        <i class="i i-dot"></i>

                                                        <span>ส่งออกสินค้า</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                        <div class="line dk hidden-nav-xs"></div>
                                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Report</div>

                                        <li>
                                            <a href="#" class="auto">
                                                <span class="pull-right text-muted">
                                                    <i class="i i-circle-sm-o text"></i>
                                                    <i class="i i-circle-sm text-active"></i>
                                                </span>

                                                <i class="i i-docs icon"></i>
                                                <span class="font-bold">รายงาน</span>
                                            </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="sbreport.php" class="auto">
                                                        <i class="i i-dot"></i>

                                                        <span>รายงานผลสรุป</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="sellreport.php" class="auto">
                                                        <i class="i i-dot"></i>

                                                        <span>รายงานการขาย</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="buyreport.php" class="auto">
                                                        <i class="i i-dot"></i>

                                                        <span>รายงานการจัดซื้อ</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <div class="line dk hidden-nav-xs"></div>
                                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Employee</div>

                                        <li>
                                            <a href="#" class="auto">
                                                <span class="pull-right text-muted">
                                                    <i class="i i-circle-sm-o text"></i>
                                                    <i class="i i-circle-sm text-active"></i>
                                                </span>
                                                <i class="i i-docs icon"></i>
                                                <span class="font-bold">พนักงาน</span>
                                            </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="Employee.php" class="auto">
                                                        <i class="i i-dot"></i>

                                                        <span>รายละเอียดพนักงาน</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                        </section>
                        <footer class="footer hidden-xs no-padder text-center-nav-xs">

                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                                <i class="i i-circleleft text"></i>
                                <i class="i i-circleright text-active"></i>
                            </a>
                        </footer>
                    </section>
                </aside>
                <!-- /.aside -->
                <section id="content">
                    <section class="hbox stretch">
                        <section>
                            <section class="vbox">
                                <section class="scrollable padder" style="margin: 0px; padding: 0;">
                                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                                    <!-- <div class="htxt">
                                        <p>นำเข้าวัตถุดิบ</p>
                                    </div> -->
                                    <div class="row wrapper" style="background-color: #ffffff;">
                                        <div class="#">
                                            <h3 style="margin: 30px 0px 0px 30px; ">ข้อมูลรายละเอียดสินค้า</h3>
                                        </div>
                                        <div class="btnaddpd pull-left " style="margin: 0px;">
                                            <a href="Addshowpd.php" class="btn btn-s-md btn-success btn-rounded " style="margin: 30px 0px 10px 30px; ">เพิ่มข้อมูลสินค้า</a>
                                        </div>
                                    </div>
                                    <div class="cardproduct">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="https://ocs-k8s-prod.s3.ap-southeast-1.amazonaws.com/PRODUCT_1571223772288.jpeg">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h2 class="card-title">ชื่อสินค้า</h2>
                                                        <p class="card-text">รหัสสินค้า: Lorem ipsum dolor sit amet.</p>
                                                        <p class="card-text">ประเภทสินค้า: Lorem ipsum dolor sit amet.</p>
                                                        <p class="card-text">ปริมาตร: Lorem ipsum dolor sit amet.</p>
                                                        <p class="card-text">ราคาสินค้า: Lorem ipsum dolor sit amet.</p>
                                                        <p class="card-text">วันหมดอายุ: Lorem ipsum dolor sit amet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cardproduct">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="https://lh3.googleusercontent.com/proxy/nm0DBDLVgFql-OzZcAt9Nq325DGOF-K5GARk3pgHaxvEZifHmgLezW2nwmjYruafyYF93hh3YQMcGg5EpQOd-vJe_kjvh98CfNd-GBj7fghrAYgm2aRsaH23ILZGmpdQJfLnDuoaeT4NN8NWideeoPcwNIj9HxZSruGmgRA1xOMwdSPn-h9LmT2wDf9bZW1aF2muG5hhOUbQDBp6QBph7v3KWafBJlh72Tpg">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h2 class="card-title">ชื่อสินค้า</h2>
                                                        <p class="card-text">รหัสสินค้า: Lorem ipsum dolor sit amet.</p>
                                                        <p class="card-text">ประเภทสินค้า: Lorem ipsum dolor sit amet.</p>
                                                        <p class="card-text">ปริมาตร: Lorem ipsum dolor sit amet.</p>
                                                        <p class="card-text">ราคาสินค้า: Lorem ipsum dolor sit amet.</p>
                                                        <p class="card-text">วันหมดอายุ: Lorem ipsum dolor sit amet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </section>
                        </section>
                    </section>





                    <script src="js/jquery.min.js"></script>
                    <!-- Bootstrap -->
                    <script src="js/bootstrap.js"></script>
                    <!-- App -->
                    <script src="js/app.js"></script>
                    <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
                    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
                    <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
                    <script src="js/charts/flot/jquery.flot.min.js"></script>
                    <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
                    <script src="js/charts/flot/jquery.flot.spline.js"></script>
                    <script src="js/charts/flot/jquery.flot.pie.min.js"></script>
                    <script src="js/charts/flot/jquery.flot.resize.js"></script>
                    <script src="js/charts/flot/jquery.flot.grow.js"></script>
                    <script src="js/charts/flot/demo.js"></script>

                    <script src="js/calendar/bootstrap_calendar.js"></script>
                    <script src="js/calendar/demo.js"></script>

                    <script src="js/sortable/jquery.sortable.js"></script>
                    <script src="js/app.plugin.js"></script>
</body>

</html>