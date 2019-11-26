<?php if($this->session->userdata('id_level') == 1) {?>

<div class="main-content-inner">
    <!-- sales report area start -->
    <div class="sales-report-area sales-style-two">
        <div class="row">
            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                <div class="single-report">
                    <div class="s-sale-inner pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Product Sold</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="coin_sales4" height="100"></canvas>
                </div>
            </div>
            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                <div class="single-report">
                    <div class="s-sale-inner pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Gross Profit</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="coin_sales5" height="100"></canvas>
                </div>
            </div>
            <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                <div class="single-report">
                    <div class="s-sale-inner pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Orders</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="coin_sales6" height="100"></canvas>
                </div>
            </div>
            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                <div class="single-report">
                    <div class="s-sale-inner pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">New Coustomers</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="coin_sales7" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- visitor graph!-->
<div class="card mt-3">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-5">
            <h4 class="header-title mb-0">Visitor Graph</h4>
            <select class="custome-select border-0 pr-3">
                <option selected="">Last 7 Days</option>
                <option value="0">Last 7 Days</option>
            </select>
        </div>
        <div id="visitor_graph"></div>
    </div>
</div>
<?php } else if($this->session->userdata('id_level') == 2) {?>

<div class="main-content-inner">
    <!-- sales report area start -->
    <div class="sales-report-area sales-style-two">
        <div class="row">
            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                <div class="single-report">
                    <div class="s-sale-inner pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Product Sold</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="coin_sales4" height="100"></canvas>
                </div>
            </div>
            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                <div class="single-report">
                    <div class="s-sale-inner pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Gross Profit</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="coin_sales5" height="100"></canvas>
                </div>
            </div>
            <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                <div class="single-report">
                    <div class="s-sale-inner pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Orders</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="coin_sales6" height="100"></canvas>
                </div>
            </div>
            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                <div class="single-report">
                    <div class="s-sale-inner pt--30 mb-3">
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">New Coustomers</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="coin_sales7" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- visitor graph!-->
<div class="card mt-3">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-5">
            <h4 class="header-title mb-0">Visitor Graph</h4>
            <select class="custome-select border-0 pr-3">
                <option selected="">Last 7 Days</option>
                <option value="0">Last 7 Days</option>
            </select>
        </div>
        <div id="visitor_graph"></div>
    </div>
</div>
<?php } else if($this->session->userdata('id_level') == 3) {?>
  <h4 style="text-align:center">selamat datang di</h4><br>
              <img src="<?php echo base_url();?>assetsd/assets/images/icon/logolaund.png" alt="logo" style="text-align:center">
<?php } ?>
