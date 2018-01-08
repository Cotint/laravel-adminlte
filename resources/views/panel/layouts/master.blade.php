<!DOCTYPE html>
<!-- saved from url=(0030)http://apanel.tnl.ir/shops/add -->
<html style="height: auto; min-height: 100%;">

<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @stack('styles')


    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--[endif]---->

    <!-- Google Font -->

</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">
    <div class="fixed">
        <header class="main-header">
            <a href="http://apanel.tnl.ir/shops/add#" class="logo">
                <span class="logo-mini">تونل</span>
                <span class="logo-lg"><b>تونل مال</b></span>
            </a>

            <nav class="navbar navbar-static-top navbar-default">

                <a href="http://apanel.tnl.ir/shops/add#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <input type="text" class="search-box-menu " name="search" placeholder="جستجو...">
                <div class="container-fluid pull-left">
                    <div class="navbar-header">
                        <a href="http://tunnelmall.com/news" target="_blank">
                            <span class="margin-left-10 color-white">وبلاگ خبری</span>
                        </a>
                        <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-chevron-down margin-left-5 color-white" aria-hidden="true"></i>
                            <span class="margin-left-10 color-white">ادمین</span>
                            <img class="img-box-menu" src="/img/Mask Group 1.svg">
                        </a>
                        <ul class="dropdown-menu submenu-nav">
                            <div class="dropdown-header text-center bg-color-submenu">
                                <strong >پروفایل</strong>
                            </div>
                            <li class="color-li-menu">
                                <a href="http://apanel.tnl.ir/logout" class="color-li-menu"><i class="fa fa-sign-out" aria-hidden="true"></i>خروج</a>
                            </li>
                            <li class="color-li-menu">
                                <a href="http://apanel.tnl.ir/change-pass" class="color-li-menu" >  <i class="fa fa-lock" aria-hidden="true"></i>تغییر رمز عبور</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </header>
    </div>

    <div class="fixed">
        <!-- Control Sidebar -->
        @include('panel.layouts.sidebar')
    </div>

    <div class="fixed">
        <div class="content-wrapper">
            <section class="content-header">
                @yield('breadcrumb')
            </section>

            <section class="content">

                @if ($errors->any())

                    @foreach ($errors->all() as $error)
                        <strong style="color:red;">{{ $error }}</strong><br>
                    @endforeach

                @endif


                @yield('content')
            </section>
        </div>
    </div>
    <footer class="main-footer text-left">
        <span></span>
    </footer>
    <aside class="control-sidebar  control-sidebar-dark"></aside>
    <div class="control-sidebar-bg">pp</div>

</div>

@stack('scripts')

</body>
</html>