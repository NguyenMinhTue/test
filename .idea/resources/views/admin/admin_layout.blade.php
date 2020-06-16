<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title> Admin</title>

    <!-- Favicons -->
    <link href="{{asset('public/admin/img/favicon.png')}}" rel="icon">
    <link href="{{asset('public/admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/public/admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('/public/admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('/public/admin/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/admin/lib/gritter/css/jquery.gritter.css')}}" />
    <!-- Custom styles for this template -->
    <link href="{{asset('/public/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/public/admin/css/style-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('/public/admin/lib/chart-master/Chart.js')}}"></script>
    @yield('css')

</head>

<body>
<section id="container">

    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>ADM<span>IN</span></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">


        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="login.html">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href=""><img src="{{URL::to('public/images/anh-dai-dien.jpg')}}" class="img-circle" width="80"></a></p>
                <h5 class="centered">Nguyễn Minh Tuệ</h5>
                <li class="mt">
                    <a class="active" href="">
                        <i class="fa fa-dashboard"></i>
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Quản lý sản phẩm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="general.html">Thêm</a></li>
                        <li><a href="{{URL::to('/admin/products')}}">liệt kê sản phẩm</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Quản lý danh mục</span>
                    </a>
                    <ul class="sub">
                        <li><a href="general.html">Thêm</a></li>
                        <li><a href="{{URL::to('/admin/categories')}}">liệt kê danh mục</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span>Quản lý khách hàng</span>
                    </a>
                    <ul class="sub">
                        <li><a href="grids.html">Thông tin khách hàng</a></li>


                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
       @yield('content')
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>ADMIN</strong>. All Rights Reserved
            </p>
            <div class="credits">
                <!--
                  You are NOT allowed to delete the credit link to TemplateMag with free version.
                  You can delete the credit link only if you bought the pro version.
                  Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                  Licensing information: https://templatemag.com/license/
                -->
                Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
            </div>
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('/public/admin/lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('/public/admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('/public/admin/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('/public/admin/lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('/public/admin/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('/public/admin/lib/jquery.sparkline.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('/public/admin/lib/common-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/admin/lib/gritter/js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/admin/lib/gritter-conf.js')}}"></script>
<!--script for this page-->
<script src="{{asset('/public/admin/lib/sparkline-chart.js')}}"></script>
<script src="{{asset('/public/admin/lib/zabuto_calendar.js')}}"></script>
@yield('js')
<script type="text/javascript">
    $(document).ready(function() {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Chào mừng bạn đến với giao diện ADMIN!',
            // (string | mandatory) the text inside the notification
            text: '',
            // (string | optional) the image to display on the left
            image: '',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
<script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                type: "text",
                label: "Special event",
                badge: "00"
            },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
</body>

</html>
