<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->


    <link rel="icon" href="{{asset("favicon.ico")}}" type="image/x-icon">

    <!-- Google Fonts -->
    {!! Html::style('') !!}
    <link href="{{asset("https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" )}}" rel="stylesheet" type="text/css">
    {!! Html::style('') !!}
    <link href="{{asset("https://fonts.googleapis.com/icon?family=Material+Icons")}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="{{asset("../../plugins/bootstrap/css/bootstrap.css" )}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset("../../plugins/node-waves/waves.css")}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset("../../plugins/animate-css/animate.css")}}" rel="stylesheet" />



    <!-- Colorpicker Css -->
    <link href="{{asset("../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css")}}" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="{{asset("../../plugins/dropzone/dropzone.css")}}" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="{{asset("../../plugins/multi-select/css/multi-select.css")}}" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="{{asset("../../plugins/jquery-spinner/css/bootstrap-spinner.css")}}" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="{{asset("../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css")}}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{asset("../../plugins/bootstrap-select/css/bootstrap-select.css")}}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{asset("../../plugins/nouislider/nouislider.min.css")}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset("../../css/style.css")}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset("../../css/themes/all-themes.css")}}" rel="stylesheet" />


</head>

<body class="theme-red">

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
    @yield('topbar')
<!-- #Top Bar -->
<section>

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{asset("/images/user.png")}}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
    @yield('menu')
    <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->

</section>

<section class="content">
    @yield('contenido')
</section>

<!-- Jquery Core Js -->
<script src="{{asset("../plugins/jquery/jquery.min.js")}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset("../plugins/bootstrap/js/bootstrap.js")}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset("../plugins/bootstrap-select/js/bootstrap-select.js")}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset("../plugins/jquery-slimscroll/jquery.slimscroll.js")}}"></script>
<!-- Jquery Validation Plugin Css -->
<script src="{{asset("../../plugins/jquery-validation/jquery.validate.js")}}"></script>

<!-- JQuery Steps Plugin Js -->
<script src="{{asset("../../plugins/jquery-steps/jquery.steps.js")}}"></script>

<!-- Sweet Alert Plugin Js -->
<script src="{{asset("../../plugins/sweetalert/sweetalert.min.js")}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset("../../plugins/node-waves/waves.js")}}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{asset("../../plugins/jquery-datatable/jquery.dataTables.js")}}"></script>
<script src="{{asset("../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js")}}"></script>
<script src="{{asset("../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js")}}"></script>
<script src="{{asset("../../plugins/jquery-datatable/extensions/export/jszip.min.js")}}"></script>
<script src="{{asset("../../plugins/jquery-datatable/extensions/export/pdfmake.min.js")}}"></script>
<script src="{{asset("../../plugins/jquery-datatable/extensions/export/vfs_fonts.js")}}"></script>
<script src="{{asset("../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js")}}"></script>
<script src="{{asset("../../plugins/jquery-datatable/extensions/export/buttons.print.min.js")}}"></script>

<!-- Custom Js -->
<script src="{{asset("../../js/admin.js")}}"></script>

<script src="{{asset("../../js/pages/tables/jquery-datatable.js")}}"></script>

<script src="{{asset("../../js/pages/forms/form-validation.js")}}"></script>

<script src="{{asset("../../js/pages/forms/form-wizard.js")}}"></script>

<!-- Demo Js -->
<script src="{{asset("../../js/demo.js")}}"></script>

</body>

</html>