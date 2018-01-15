<!DOCTYPE html>
<html style="height: auto; min-height: 100%;">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('node_modules/bootstrap-rtl/examples/originals/dist/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/bootstrap-rtl/examples/rtl/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/panel/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/panel/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/panel/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/panel/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/panel/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/panel/bootstrap-iconpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/panel/fontawesome-iconpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/panel/jquery.fonticonpicker.min.css')}}">
    @stack('styles')
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper">
    <header class="main-header nav-box">
        <a href="index2.html" class="logo">
            <span class="logo-mini margin-top-15"><b>A</b>LT</span>
            <span class="logo-lg margin-top-15"><b>Admin</b>LTE</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu navbar-box">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <a class="colorWhite" href="">
                    خروج
                </a>
            </div>
            <div class="navbar-custom-menu navbar-box">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <a href="#" class="colorWhite">تغییر رمز عبور</a>
            </div>
            <div class="navbar-custom-menu navbar-box">
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="" target="_blank" class="colorWhite">صفحه اصلی</a>
            </div>

        </nav>
    </header>
    <aside class="main-sidebar sidebar-box">
        <section class="sidebar">
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="جستجو...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <ul class="sidebar-menu tree" data-widget="tree">
                <li class="">
                    <a href="{{ route('categories.index') }}">
                        <i class="fa fa-list"></i>
                        <span> دسته بندی ها </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cubes"></i>
                        <span> محصولات </span>
                        <span class="pull-left-container">
                            <i class="fa fa-angle-left pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="">
                                <i class="fa fa-product-hunt"></i> محصولات
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-plus-circle"></i> اضافه کردن محصول
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bookmark-o"></i>
                        <span>برندها</span>
                        <span class="pull-left-container">
                            <i class="fa fa-angle-left pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="">
                                <i class="fa fa-product-hunt"></i> برندها
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-plus-circle"></i> اضافه کردن برند
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-tags"></i>
                        <span> بهینه سازی موتور جستجو </span>
                        <span class="pull-left-container">
                            <i class="fa fa-angle-left pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="">
                                <i class="fa fa-key"></i>
                                <span> کلمات کلیدی </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('tags.index') }}">
                                <i class="fa fa-tag"></i>
                                <span> برچسب ها </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-bag"></i>
                        <span> فروشگاه ها </span>
                        <span class="pull-left-container">
                            <i class="fa fa-angle-left pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="">
                                <i class="fa fa-shopping-bag"></i> فروشگاه ها
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-plus-circle"></i> اضافه کردن فروشگاه
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-bandcamp" aria-hidden="true"></i>
                                <span> تجهیزات </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                        <span> اخبار  </span>
                        <span class="pull-left-container">
                                    <i class="fa fa-angle-left pull-left"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="">
                                <i class="fa fa-comment-o" aria-hidden="true"></i> اخبار
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-plus-circle"></i> اضافه کردن خبر
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-sticky-note-o "></i>
                        <span> ارتباط با ما </span>
                        <span class="pull-left-container">
                                    <i class="fa fa-angle-left pull-left"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="">
                                <i class="fa fa-user-circle-o"></i>
                                <span> نمایندگی ها </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-university"></i>
                                <span> تامین کننده ها </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-balance-scale"></i>
                                <span> شکایات و پیگیری </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-phone-square"></i>
                                <span> تماس باما </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>اطلاعات پایه</span>
                        <span class="pull-left-container">
                            <i class="fa fa-angle-left pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-question "></i>
                                <span>سوالات متداول</span>
                                <span class="pull-left-container">
                                    <i class="fa fa-angle-left pull-left"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="">
                                        <i class="fa fa-question "></i> سوالات متداول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="">
                                        <i class="fa fa-plus-circle"></i> اضافه کردن سوال
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-sticky-note-o"></i>
                                <span>صفحه ها</span>
                                <span class="pull-left-container">
                                    <i class="fa fa-angle-left pull-left"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="">
                                        <i class="fa fa-sticky-note-o"></i> صفحه ها
                                    </a>
                                </li>
                                <li class="">
                                    <a href="">
                                        <i class="fa fa-plus-circle"></i> اضافه کردن صفحه
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-sliders"></i>
                                <span> اسلاید شو </span>
                            </a>
                        </li>
                        <li class="navbar-custom-menu">
                            <a href="" class="colorWhite">
                                <i class="fa fa-bolt" aria-hidden="true"></i>
                                <span> قسمت های خاص </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" col-xs-12  center-block cotintPower">
                    <a href="http://www.cotint.ir/" target="_blank">
                        <span class="cursor">Powered By </span>
                        <i class="m-g-10">Cotint</i>
                    </a>
                </li>
            </ul>
        </section>

    </aside>
</div>
<script src="{{ asset('node_modules/bootstrap-rtl/bootstrap/js/tests/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('node_modules/bootstrap-rtl/examples/originals/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/panel/main.min.js') }}"></script>
<script src="{{ asset('node_modules/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('js/panel/bootstrap-iconpicker-iconset-all.min.js') }}"></script>
<script src="{{ asset('js/panel/bootstrap-iconpicker.min.js') }}"></script>
<script src="{{ asset('js/panel/jquery.fonticonpicker.min.js') }}"></script>
<script src="{{ asset('js/panel/footable.all.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/panel/app.js') }}"></script>
<script src="{{ asset('js/panel/AdminLTE.min.js') }}"></script>
@stack('scripts')
</body>
<script>
    $(document).ready(function () {
        $('.my').on('iconpickerSelected', function(event){
        });
    });
</script>
</html>