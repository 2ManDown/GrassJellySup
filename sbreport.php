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
                                <section class="scrollable padder">
                                    <div class="row bg-light dk m-b">
                                        <div class="col-md-6 dker">
                                            <section>
                                                <header class="font-bold padder-v">
                                                    <div class="pull-right">
                                                        <div class="btn-group">
                                                            <button data-toggle="dropdown" class="btn btn-sm btn-rounded btn-default dropdown-toggle">
                                                                <span class="dropdown-label">Week</span>
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-select">
                                                                <li><a href="#"><input type="radio" name="b">Month</a></li>
                                                                <li><a href="#"><input type="radio" name="b">Week</a></li>
                                                                <li><a href="#"><input type="radio" name="b">Day</a></li>
                                                            </ul>
                                                        </div>
                                                        <a href="#" class="btn btn-default btn-icon btn-rounded btn-sm">Go</a>
                                                    </div>
                                                    Statistics
                                                </header>
                                                <div class="panel-body">
                                                    <div id="flot-sp1ine" style="height:210px"></div>
                                                </div>
                                                <div class="row text-center no-gutter">
                                                    <div class="col-xs-3">
                                                        <span class="h4 font-bold m-t block">5,860</span>
                                                        <small class="text-muted m-b block">Orders</small>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <span class="h4 font-bold m-t block">10,450</span>
                                                        <small class="text-muted m-b block">Sellings</small>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <span class="h4 font-bold m-t block">21,230</span>
                                                        <small class="text-muted m-b block">Items</small>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <span class="h4 font-bold m-t block">7,230</span>
                                                        <small class="text-muted m-b block">Customers</small>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-md-6">
                                            <section>
                                                <header class="font-bold padder-v">
                                                    <div class="btn-group pull-right">
                                                        <button data-toggle="dropdown" class="btn btn-sm btn-rounded btn-default dropdown-toggle">
                                                            <span class="dropdown-label">Last 24 Hours</span>
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-select">
                                                            <li><a href="#"><input type="radio" name="a">Today</a></li>
                                                            <li><a href="#"><input type="radio" name="a">Yesterday</a></li>
                                                            <li><a href="#"><input type="radio" name="a">Last 24 Hours</a></li>
                                                            <li><a href="#"><input type="radio" name="a">Last 7 Days</a></li>
                                                            <li><a href="#"><input type="radio" name="a">Last 30 days</a></li>
                                                            <li><a href="#"><input type="radio" name="a">Last Month</a></li>
                                                            <li><a href="#"><input type="radio" name="a">All Time</a></li>
                                                        </ul>
                                                    </div>
                                                    Analysis
                                                </header>
                                                <div class="panel-body flot-legend">
                                                    <div id="flot-pie-donut" style="height:240px"></div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    <section class="panel panel-default">

                                        <div class="row wrapper">
                                            <div class="col-sm-5 m-b-xs">
                                                <select class="input-sm form-control input-s-sm inline v-middle">
                                                    <option value="0">Import</option>
                                                    <option value="1">Export</option>
                                                </select>
                                                <button class="btn btn-sm btn-default">Apply</button>
                                            </div>
                                            <div class="col-sm-4 m-b-xs">
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-sm btn-default active">
                                                        <input type="radio" name="options" id="option1"> Day
                                                    </label>
                                                    <label class="btn btn-sm btn-default">
                                                        <input type="radio" name="options" id="option2"> Week
                                                    </label>
                                                    <label class="btn btn-sm btn-default">
                                                        <input type="radio" name="options" id="option2"> Month
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <input type="text" class="input-sm form-control" placeholder="Search">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped b-t b-light">
                                                <thead>
                                                    <tr>
                                                        <th width="20"><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox"><i></i></label></th>
                                                        <th class="th-sortable" data-toggle="class">รหัส
                                                            <span class="th-sort">
                                                                <i class="fa fa-sort-down text"></i>
                                                                <i class="fa fa-sort-up text-active"></i>
                                                                <i class="fa fa-sort"></i>
                                                            </span>
                                                        </th>
                                                        <th>ชื่อ</th>
                                                        <th>วันที่นำเข้า</th>
                                                        <th>จำนวนนำเข้า</th>
                                                        <th>ราคา/หน่วย</th>
                                                        <th>ราคารวม</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox" name="post[]"><i></i></label></td>
                                                        <td>1</td>
                                                        <td>เฉาก๊วย</td>
                                                        <td>Jul 25, 2013</td>
                                                        <td>500</td>
                                                        <td>
                                                            20
                                                        </td>
                                                        <td>5000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox" name="post[]"><i></i></label></td>
                                                        <td>2</td>
                                                        <td>เฉาก๊วย</td>
                                                        <td>Jul 30, 2013</td>
                                                        <td>200</td>
                                                        <td>
                                                            20
                                                        </td>
                                                        <td>5000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox" name="post[]"><i></i></label></td>
                                                        <td>3</td>
                                                        <td>เฉาก๊วย</td>
                                                        <td>April 5, 2013</td>
                                                        <td>100</td>
                                                        <td>
                                                            20
                                                        </td>
                                                        <td>5000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox" name="post[]"><i></i></label></td>
                                                        <td>4</td>
                                                        <td>เฉาก๊วย</td>
                                                        <td>April 15, 2013</td>
                                                        <td>300</td>
                                                        <td>
                                                            20
                                                        </td>
                                                        <td>5000</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <footer class="panel-footer">
                                            <div class="row">

                                                <div class="col-sm-4 text-center">
                                                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                                                </div>
                                                <div class="col-sm-4 text-right text-center-xs">
                                                    <ul class="pagination pagination-sm m-t-none m-b-none">
                                                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                                        <li><a href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">5</a></li>
                                                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </footer>
                                    </section>



                                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
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