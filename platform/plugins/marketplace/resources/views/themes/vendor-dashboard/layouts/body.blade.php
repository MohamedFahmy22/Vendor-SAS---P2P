@extends('plugins/marketplace::themes.vendor-dashboard.layouts.header')

 <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-md-5">
                            <span class="d-flex align-items-center purchase-popup d-none">
                                <p style="background-color: #eee;padding:5px  10px;border-radius: 5px;color: #000;">اخر
                                    اسبوع </p>
                                <p style="">اخر شهر </p>

                                <p>اخر سنه</p>

                                <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template"
                                    target="_blank" class="btn ml-auto download-button d-none"></a>
                                <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/"
                                    target="_blank" class="btn purchase-button d-none"></a>
                                <i class="mdi mdi-close d-none" id="bannerClose"></i>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="tab-content tab-transparent-content">
                                <div class="tab-pane fade show active" id="business-1" role="tabpanel"
                                    aria-labelledby="business-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-4 col-lg-4 col-sm-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body text-start">
                                                    <h5 class="mb-2 text-dark font-weight-normal"><img
                                                            src='{{ asset('vendor/core/plugins/marketplace/images/images/$.svg')}}' alt="img"> <span>اجمالى
                                                            المبيعات</span></h5>
                                                    <h2 class="mb-4 text-dark font-weight-bold">$10,243.00</h2>

                                                    <p class="mt-4 mb-0"><span class="span1">8.5% <img
                                                                src="{{ asset('vendor/core/plugins/marketplace/images/images/arrowUp.svg')}}"></span>مقارنة
                                                        بالاسبوع الماضى </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-sm-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body text-start">
                                                    <h5 class="mb-2 text-dark font-weight-normal"><img
                                                            src='{{ asset('vendor/core/plugins/marketplace/images/images/numofcustomer.svg')}}' alt="img">
                                                        <span>اجمالى المبيعات</span></h5>
                                                    <h2 class="mb-4 text-dark font-weight-bold">36.125</h2>

                                                    <p class="mt-4 mb-0"><span class="span1">8.5% <img
                                                                src="{{ asset('vendor/core/plugins/marketplace/images/images/arrowUp.svg')}}"></span>مقارنة
                                                        بالاسبوع الماضى </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-sm-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body text-start">
                                                    <h5 class="mb-2 text-dark font-weight-normal"><img
                                                            src='{{ asset('vendor/core/plugins/marketplace/images/images/productsvalue.svg')}}' alt="img">
                                                        <span>اجمالى المبيعات</span></h5>
                                                    <h2 class="mb-4 text-dark font-weight-bold">51.3647</h2>

                                                    <p class="mt-4 mb-0"><span class="span2">8.5% <img
                                                                src="{{ asset('vendor/core/plugins/marketplace/images/images/arrowDown.svg')}}"></span>مقارنة
                                                        بالاسبوع الماضى </p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm-7  grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body"
                                                    style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;border-radius: 10px;">
                                                    <div class="d-xl-flex justify-content-between mb-2">
                                                        <h4 class="card-title w-100 text-center">تحليلات المبيعات</h4>
                                                        <div class="graph-custom-legend primary-dot"
                                                            id="pageViewAnalyticLengend"></div>
                                                    </div>
                                                    <canvas id="page-view-analytic"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body chart"
                                                    style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;border-radius: 10px;">
                                                    <h4 class="card-title">الطلبات الجديدة</h4>
                                                    <canvas id="doughnutChart" width="200" height="80"
                                                        style="margin:10px auto ;"></canvas>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="m-0" style="color: #000;">اجمالى الطلبات : 563</p>
                                                        <p class="m-0" style="color: #000;">الطلبات المتبقية : 563</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-sec">
                        <div class="col-lg-12 grid-margin stretch-card p-0">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Product Stock</h4>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>الصوره</th>
                                                <th>اسم المنتج</th>
                                                <th>التصنيف</th>
                                                <th>الكمية</th>
                                                <th>السعر</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src='{{ asset('vendor/core/plugins/marketplace/images/images/img1.jpg')}}'></td>
                                                <td>Apple Watch Series 4</td>
                                                <td>Digital Product</td>
                                                <td>260</td>
                                                <td class="two-img">
                                                    <p>$690.00</p>
                                                    <span
                                                        style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;"><img
                                                            src='{{ asset('vendor/core/plugins/marketplace/images/images/delete_icon.svg')}}'></span>
                                                    <span
                                                        style="border-top-left-radius: 5px;border-bottom-left-radius: 5px;"><img
                                                            src='{{ asset('vendor/core/plugins/marketplace/images/images/edit_icon.svg')}}'></span>
                                </div>
                                </td>
                                </tr>
                                <tr>
                                    <td><img src='{{ asset('vendor/core/plugins/marketplace/images/images/img2.jpg')}}'></td>
                                    <td>Camera</td>
                                    <td>Electronic</td>
                                    <td>375</td>

                                    <td class="two-img">
                                        <p>$690.00</p> <span
                                            style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;"><img
                                                src='{{ asset('vendor/core/plugins/marketplace/images/images/delete_icon.svg')}}'></span>
                                        <span style="border-top-left-radius: 5px;border-bottom-left-radius: 5px;"><img
                                                src='{{ asset('vendor/core/plugins/marketplace/images/images/edit_icon.svg') }}'></span>

                            </div>
                            </td>
                            </tr>



                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
