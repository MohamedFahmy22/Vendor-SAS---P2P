@extends('plugins/marketplace::themes.vendor-dashboard.layouts.header')

            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"
                    style="background-color: #eee;margin: 10px;border-radius: 10px;height: 60px;"><img
                        src="{{ asset('vendor/core/plugins/marketplace/images/logo.png') }}" alt="logo" style="width: 100%;" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('vendor/core/plugins/marketplace/images/logo.png') }}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">


                <ul class="navbar-nav navbar-nav-right w-100" style="padding: 0;">
                    <li class="nav-item dropdown"
                        style="border: 1px solid #eee; margin: 5px; border-radius: 5px;height: 40px;">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <img src="{{ asset('vendor/core/plugins/marketplace/images/images/billnotification.svg')}}">
                            <span class="count-symbol bg-danger"></span>
                        </a>

                    </li>
                    <div class="search-field  d-xl-block">

                        <form class="d-flex align-items-center h-100" action="#">

                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    {{-- <img src="{{ asset('vendor/core/plugins/marketplace/images/images/search_24px.svg')}}"> --}}
                                </div>
                                <input type="text" class="form-control bg-transparent border-0 h-100"
                                    placeholder="ابحث">
                            </div>
                        </form>
                    </div>

                    <li class="nav-item " style="width: 70%; display: flex; justify-content: end;">
                        <a class="d-flex align-items-center" id="" href="#">
                            <div class="nav-profile-img">
                                <img src="{{ asset('vendor/core/plugins/marketplace/images/images/shop.svg')}}" alt="image"
                                    style="margin: 5px;width: 20px;height: 20px;">
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-0 text-black m-0">متجرى</p>
                            </div>
                        </a>

                    </li>


                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
