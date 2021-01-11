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
    <link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" />
    <link rel="stylesheet" href="js/slider/slider.css" type="text/css" />
    <link rel="stylesheet" href="js/chosen/chosen.css" type="text/css" />
    <link rel="stylesheet" href="js/spinner/jquery.bootstrap-touchspin.css" type="text/css" />
    <link rel="stylesheet" href="js/typehead/typehead.css" type="text/css" />

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



                                                    <section class="panel panel-default">
                                                        <header class="panel-heading font-bold" style="font-size:  18px;">
                                                            ออกใบเบิกวัตถุดิบ
                                                        </header>
                                                        <div class="panel-body">
                                                            <form class="form-horizontal" method="get">
                                                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">วัตถุดิบ</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="account" class="form-control m-b">
                                                                            <option value="" disabled selected>กรุณาเลือกวัตถุดิบ</option>
                                                                            <option>วัตถุดิบ 1</option>
                                                                            <option>วัตถุดิบ 2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">ชื่อวัตถุดิบ</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" readonly>
                                                                        <!--<span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                                                    </div>
                                                                </div>

                                                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">ประเภทวัตถุดิบ</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" readonly>
                                                                        <!--<span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                                                    </div>
                                                                </div>

                                                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">วันหมดอายุ</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" readonly>
                                                                        <!--<span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                                                    </div>
                                                                </div>

                                                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">จำนวนคงเหลือ</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" readonly>
                                                                        <!--<span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                                                    </div>
                                                                </div>

                                                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">วันที่เบิก</label>
                                                                    <div class="col-sm-10">
                                                                        <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="29-12-2020" data-date-format="dd-mm-yyyy">
                                                                    </div>
                                                                </div>

                                                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label" for="input-id-1">จำนวนที่เบิก</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" class="form-control" id="input-id-1">
                                                                    </div>
                                                                </div>


                                                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-4 col-sm-offset-2">
                                                                        <button type="submit" class="btn btn-default">Cancel</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </section>
                                                </section>
                                            </section>
                                            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                                        </section>
                                    </section>
                                </section>
                            </section>

                            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                            <script src="js/jquery.min.js"></script>


                        </section>

                        <!-- Bootstrap -->
                        <script src="js/bootstrap.js"></script>
                        <!-- App -->
                        <script src="js/app.js"></script>
                        <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
                        <!-- datepicker -->
                        <script src="js/datepicker/bootstrap-datepicker.js"></script>
                        <!-- slider -->
                        <script src="js/slider/bootstrap-slider.js"></script>
                        <!-- file input -->
                        <script src="js/file-input/bootstrap-filestyle.min.js"></script>
                        <!-- wysiwyg -->
                        <script src="js/wysiwyg/jquery.hotkeys.js"></script>
                        <script src="js/wysiwyg/bootstrap-wysiwyg.js"></script>
                        <script src="js/wysiwyg/demo.js"></script>
                        <!-- markdown -->
                        <script src="js/markdown/epiceditor.min.js"></script>
                        <script src="js/markdown/demo.js"></script>

                        <script src="js/chosen/chosen.jquery.min.js"></script>
                        <script src="js/spinner/jquery.bootstrap-touchspin.min.js"></script>
                        <script src="js/typehead/typeahead.bundle.min.js"></script>
                        <script src="js/typehead/demo.js"></script>
                        <script src="js/app.plugin.js"></script>
</body>

</html>