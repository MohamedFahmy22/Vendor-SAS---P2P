@extends('plugins/marketplace::themes.vendor-dashboard.layouts.header')

     <nav class="sidebar sidebar-offcanvas" id="sidebar">

                <ul class="nav">
                    <li class="nav-item" style="text-align: center;margin: 20px auto;">
                        <button id="addClassBtn" class="navbar-toggler navbar-toggler align-self-center" type="button"
                            data-toggle="minimize">
                            <span class=""><img src="{{ asset('vendor/core/plugins/marketplace/images/images/Vector.svg')}}"></span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <span class="icon-bg">
                                <img src="{{ asset('vendor/core/plugins/marketplace/images/images/home.svg')}}">
                            </span>
                            <span class="menu-title">الرئيسية</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/mdi.html">
                            <span class="icon-bg"><img src="{{ asset('vendor/core/plugins/marketplace/images/images/orders.svg')}}"></span>
                            <span class="menu-title">طلبات عروض الاسعار</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                            <span class="icon-bg"><img src='{{ asset('vendor/core/plugins/marketplace/images/images/sales.svg')}}'></span>
                            <span class="menu-title">المبيعات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/chartjs.html">
                            <span class="icon-bg"><img src='{{ asset('vendor/core/plugins/marketplace/images/images/Customers.svg')}}'></span>
                            <span class="menu-title">العملاء</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">
                            <span class="icon-bg"><img src='{{ asset('vendor/core/plugins/marketplace/images/images/discounts.svg')}}'></span>
                            <span class="menu-title">الخصومات و الكوبونات</span>
                        </a>
                    </li>



                    <li class="nav-item sidebar-user-actions">
                        <div class="sidebar-user-menu">
                            <a href="#" class="nav-link"><img src='{{ asset('vendor/core/plugins/marketplace/images/images/money_mangement.svg')}}'>
                                <span class="menu-title">الادارة المالية</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item sidebar-user-actions">
                        <div class="sidebar-user-menu">
                            <a href="#" class="nav-link"><img src='{{ asset('vendor/core/plugins/marketplace/images/images/logistics.svg')}}'>
                                <span class="menu-title">الخدمات اللوجيستية </span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item sidebar-user-actions">
                        <div class="sidebar-user-menu">
                            <a href="#" class="nav-link"><img src='{{ asset('vendor/core/plugins/marketplace/images/images/reports.svg')}}'>
                                <span class="menu-title">التقارير</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item sidebar-user-actions">
                        <div class="sidebar-user-menu">
                            <a href="#" class="nav-link"><img src='{{ asset('vendor/core/plugins/marketplace/images/images/settings.svg')}}'>
                                <span class="menu-title">الضبط</span></a>
                        </div>
                    </li>
                    <li class="nav-item sidebar-user-actions">
                        <div class="sidebar-user-menu">
                            <a href="#" class="nav-link"><img src='{{ asset('vendor/core/plugins/marketplace/images/images/logout.svg')}}'>
                                <span class="menu-title">خروج</span></a>
                        </div>
                    </li>
                </ul>
            </nav>
