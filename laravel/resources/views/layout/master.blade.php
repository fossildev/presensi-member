<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2018 03:26:52 GMT -->

<head>
    @yield('title')

    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="TuxLabs" name="author">
    <meta content="Presensi Member FOSSIL" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/timedropper/timedropper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main9503.css?version=4.2.0') }}" rel="stylesheet">
</head>

<body class=" with-content-panel">
<div class="all-wrapper menu-side with-side-panel">
    {{--<div aria-hidden="true" class="onboarding-modal modal fade animated show-on-load" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span class="close-label">Skip Intro</span>
                    <span class="os-icon os-icon-close"></span>
                </button>
                <div class="onboarding-slider-w">
                    <div class="onboarding-slide">
                        <div class="onboarding-media">
                            <img alt="" src="img/bigicon2.png" width="200px">
                        </div>
                        <div class="onboarding-content with-gradient">
                            <h4 class="onboarding-title">Example of onboarding screen!
                            </h4>
                            <div class="onboarding-text">This is an example of a multistep onboarding screen, you can use it to introduce your customers
                                to your app, or collect additional information from them before they start using your
                                app.
                            </div>
                        </div>
                    </div>
                    <div class="onboarding-slide">
                        <div class="onboarding-media">
                            <img alt="" src="img/bigicon5.png" width="200px">
                        </div>
                        <div class="onboarding-content with-gradient">
                            <h4 class="onboarding-title">Example Request Information
                            </h4>
                            <div class="onboarding-text">In this example you can see a form where you can request some additional information from
                                the customer when they land on the app page.
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Your Full Name</label>
                                            <input class="form-control" placeholder="Enter your full name..."
                                                   type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Your Role</label>
                                            <select class="form-control">
                                                <option>Web Developer</option>
                                                <option>Business Owner</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="onboarding-slide">
                        <div class="onboarding-media">
                            <img alt="" src="img/bigicon6.png" width="200px">
                        </div>
                        <div class="onboarding-content with-gradient">
                            <h4 class="onboarding-title">Showcase App Features
                            </h4>
                            <div class="onboarding-text">In this example you can showcase some of the features of your application, it is very handy
                                to make new users aware of your hidden features. You can use boostrap columns to split
                                them up.
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="features-list">
                                        <li>Fully Responsive design</li>
                                        <li>Pre-built app layouts</li>
                                        <li>Incredible Flexibility</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="features-list">
                                        <li>Boxed & Full Layouts</li>
                                        <li>Based on Bootstrap 4</li>
                                        <li>Developer Friendly</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="layout-w">
        <!--------------------
START - Mobile Menu
-------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w">
                <a class="mm-logo" href="index-2.html">
                    <img src="img/logo.png">
                    <span>Clean Admin</span>
                </a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w">
                        <img alt="" src="{{ asset('img/no-photo.jpg') }}">
                    </div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Edy Tama Kusumajaya</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                </div>
                <!--------------------
START - Mobile Menu List
-------------------->
                <ul class="main-menu">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ route('presensi') }}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Presensi</span>
                        </a>

                    </li>
                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-delivery-box-2"></div>
                            </div>
                            <span>Data</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('murid.index') }}">Member</a>
                            </li>
                            <li>
                                <a href="{{ route('kelas.index') }}">Kelas
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sesi-kelas.index') }}">Sesi Kelas
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <!--------------------END - Mobile Menu List-------------------->

            </div>
        </div>
        <!--------------------END - Mobile Menu-------------------->
        <!--------------------START - Menu side-------------------->
        <div class="desktop-menu menu-side-w menu-activated-on-click">
            <div class="logo-w">
                <a class="logo" href="index-2.html">
                    <div class="logo-element"></div>
                    <div class="logo-label">PRESENSI PELATIHAN FOSSIL AMIKOM</div>
                </a>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="logged-user-i">
                        <div class="avatar-w">
                            <img alt="" src="{{ asset('img/no-photo.jpg') }}">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">{{ Auth::getUser()->name }}</div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                        <div class="logged-user-menu">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w">
                                    <img alt="" src="{{ asset('img/no-photo.jpg') }}">
                                </div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name">{{ Auth::getUser()->name }}</div>
                                    <div class="logged-user-role">Administrator</div>
                                </div>
                            </div>
                            <div class="bg-icon">
                                <i class="os-icon os-icon-wallet-loaded"></i>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="os-icon os-icon-signs-11"></i>
                                        <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">{{ csrf_field() }}</form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ route('presensi') }}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Presensi</span>
                        </a>

                    </li>
                    <li class="has-sub-menu {{ (Route::is('murid.*')||Route::is('kelas.*')||Route::is('sesi-kelas.*')||Route::is('bulk')? 'active':'') }}">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-delivery-box-2"></div>
                            </div>
                            <span>Data</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="{{ Route::is('riwayat.*')? 'active':'' }}">
                                <a href="{{ route('riwayat.index') }}">Riwayat Presensi</a>
                            </li>

                            <li class="{{ Route::is('murid.*')? 'active':'' }}">
                                <a href="{{ route('murid.index') }}">Member</a>
                            </li>
                            <li class="{{ Route::is('kelas.*')? 'active':'' }}">
                                <a href="{{ route('kelas.index') }}">Kelas
                                </a>
                            </li>
                            <li class="{{ Route::is('sesi-kelas.*')? 'active':'' }}">
                                <a href="{{ route('sesi-kelas.index') }}">Sesi Kelas
                                </a>
                            </li>
                            <li class="{{ Route::is('bulk')? 'active':'' }}">
                                <a href="{{ route('bulk') }}">Bulk Add Member Baru
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><br> <br>Develop by TuxLabs &copy; 2018.
                    </li>

                </ul>

            </div>
        </div>
        <!--------------------END - Menu side-------------------->
        <div class="content-w">
            <!--------------------START - Breadcrumbs-------------------->

            <!--------------------
END - Breadcrumbs
-------------------->
            <div class="content-panel-toggler">
                <i class="os-icon os-icon-grid-squares-22"></i>
                <span>Sidebar</span>
            </div>
            <div class="content-i">
                <div class="content-box">
                    @yield('content-box')
                </div>
                <!--------------------START - Sidebar-------------------->
                @yield('content-panel')

            </div>
        </div>
    </div>
    <div class="display-type"></div>
</div>
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('bower_components/moment/moment.js') }}"></script>
<script src="{{ asset('bower_components/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('bower_components/dropzone/dist/dropzone.js') }}"></script>
<script src="{{ asset('bower_components/editable-table/mindmup-editabletable.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('bower_components/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/util.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/alert.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/button.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/carousel.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/collapse.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/modal.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/tab.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/js/dist/popover.js') }}"></script>
<script src="{{ asset('bower_components/timedropper/timedropper.js') }}"></script>
<script src="{{ asset('js/sweetalert2.all.js') }}"></script>
<script src="{{ asset('js/main9503.js?version=4.2.0') }}"></script>
@yield('script')
</body>
<!-- Mirrored from light.pinsupreme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2018 03:30:13 GMT -->

</html>
