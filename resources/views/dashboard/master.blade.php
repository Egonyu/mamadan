<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('dashboard.partials.head')

<body class="layout-default">
    @include('sweetalert::alert')


    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        @include('dashboard.partials.header')

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">





                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center">
                            <div class="flex">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                                <h1 class="m-0">Dashboard</h1>
                            </div>
                            <a href="" class="btn btn-success ml-3">New Report</a>
                        </div>
                    </div>




                    <div class="container-fluid page__container">

                        @yield('content')

                    </div>



                </div>
                <!-- // END drawer-layout__content -->

                @include('dashboard.partials.sidebarmenu')
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
    </div>

    @include('dashboard.partials.scripts')

</body>

</html>
