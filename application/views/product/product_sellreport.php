<section id="content">
    <section class="vbox">
        <section class="scrollable padder">
            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    รายงานการส่งออกสินค้า
                </header>
                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs" style="position: ralative; top: 18px; margin-bottom: 40px;">
                        <a href="<?php echo site_url('product/product_exportbill')?>" class="btn btn-s-lg btn-success btn-rounded">ส่งออกสินค้า</a>
                    </div>
                    <div class="col-sm-4 m-b-xs" style="margin-top: 20px">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-sm btn-default active">
                                <input type="radio" name="options" id="option1"> รายวัน
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายสัปดาห์
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายเดือน
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3" style="margin-top: 20px">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>เลขคำสั่งส่งออก</th>
                                <th>ลอตสินค้าที่ส่งออก/วันที่</th>
                                <th>จำนวนที่ส่งออก</th>
                                <th>ชื่อสินค้า</th>
                                <th>ราคาส่งออกรวม</th>
                                <th style="text-align: center;">ใบส่งออก</th>
                            </tr>
                        </div>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo site_url('product/product_selldetail')?>">1</a></td>
                                <td><a href="#">12/01/2564</a></td>
                                <td><a href="#">3</a></td>
                                <td><a href="#">4</a></td>
                                <td><a href="#">5</a></td>
                                <td style="text-align: center;"><a href="<?php echo site_url('product/product_selldetail')?>"><i class="glyphicon glyphicon-print"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td style="text-align: center;"><a href="<?php echo site_url('product/product_selldetail')?>"><i class="glyphicon glyphicon-print"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-7 text-right text-center-xs">
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
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>