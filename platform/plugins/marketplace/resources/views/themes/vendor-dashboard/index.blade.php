
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
        @yield('header', view(MarketplaceHelper::viewPath('vendor-dashboard.layouts.header')))


</head>

<body class="">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

        @yield('pagehead', view(MarketplaceHelper::viewPath('vendor-dashboard.layouts.pagehead')))
        </nav>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @yield('menu', view(MarketplaceHelper::viewPath('vendor-dashboard.layouts.menu')))

            <!-- partial -->
            @yield('body', view(MarketplaceHelper::viewPath('vendor-dashboard.layouts.body')))

        </div>

    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>

    @yield('footer', view(MarketplaceHelper::viewPath('vendor-dashboard.layouts.footer')))

</body>

</html>
