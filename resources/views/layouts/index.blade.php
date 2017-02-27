<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>{{$title or ''}}</title>
    <meta name="keywords" content="{{$keywords or ''}}"/>
    <meta name="description" content="{{$description or ''}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- basic styles -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <!-- page specific plugin styles -->
    <!-- fonts -->
    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-skins.min.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css"/>
    <![endif]-->
    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    @yield('append_css')
</head>

<body>
@include('layouts.header')

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        @include('layouts.menu')

        <div class="main-content">
            @include('layouts.breadcrumb')

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        控制台
                        <small>
                            <i class="icon-double-angle-right"></i>
                            查看
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <div class="alert alert-block alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="icon-remove"></i>
                            </button>
                            <i class="icon-ok green"></i>
                            欢迎使用 <strong class="green">
                                crisen后台管理系统
                                <small>(v1.2)</small>
                            </strong>
                        </div>
                        <div class="row">
                            <div class="space-6"></div>

                            <div class="col-sm-7 infobox-container">
                                <div class="infobox infobox-green  ">
                                    <div class="infobox-icon">
                                        <i class="icon-comments"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">32</span>
                                        <div class="infobox-content">2个评论</div>
                                    </div>
                                    <div class="stat stat-success">8%</div>
                                </div>

                                <div class="infobox infobox-blue  ">
                                    <div class="infobox-icon">
                                        <i class="icon-twitter"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">11</span>
                                        <div class="infobox-content">新粉丝</div>
                                    </div>

                                    <div class="badge badge-success">
                                        +32%
                                        <i class="icon-arrow-up"></i>
                                    </div>
                                </div>

                                <div class="infobox infobox-pink  ">
                                    <div class="infobox-icon">
                                        <i class="icon-shopping-cart"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">8</span>
                                        <div class="infobox-content">新订单</div>
                                    </div>
                                    <div class="stat stat-important">4%</div>
                                </div>

                                <div class="infobox infobox-red  ">
                                    <div class="infobox-icon">
                                        <i class="icon-beaker"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">7</span>
                                        <div class="infobox-content">调查</div>
                                    </div>
                                </div>

                                <div class="infobox infobox-orange2  ">
                                    <div class="infobox-chart">
                                        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">6,251</span>
                                        <div class="infobox-content">页面查看次数</div>
                                    </div>

                                    <div class="badge badge-success">
                                        7.2%
                                        <i class="icon-arrow-up"></i>
                                    </div>
                                </div>

                                <div class="infobox infobox-blue2  ">
                                    <div class="infobox-progress">
                                        <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                            <span class="percent">42</span>%
                                        </div>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-text">交易使用</span>

                                        <div class="infobox-content">
                                            <span class="bigger-110">~</span>
                                            剩余58GB
                                        </div>
                                    </div>
                                </div>

                                <div class="space-6"></div>

                                <div class="infobox infobox-green infobox-small infobox-dark">
                                    <div class="infobox-progress">
                                        <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                            <span class="percent">61</span>%
                                        </div>
                                    </div>

                                    <div class="infobox-data">
                                        <div class="infobox-content">任务</div>
                                        <div class="infobox-content">完成</div>
                                    </div>
                                </div>

                                <div class="infobox infobox-blue infobox-small infobox-dark">
                                    <div class="infobox-chart">
                                        <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                    </div>

                                    <div class="infobox-data">
                                        <div class="infobox-content">获得</div>
                                        <div class="infobox-content">$32,000</div>
                                    </div>
                                </div>

                                <div class="infobox infobox-grey infobox-small infobox-dark">
                                    <div class="infobox-icon">
                                        <i class="icon-download-alt"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <div class="infobox-content">下载次数</div>
                                        <div class="infobox-content">1,205</div>
                                    </div>
                                </div>
                            </div>

                            <div class="vspace-sm"></div>

                            <div class="col-sm-5">
                                <div class="widget-box">
                                    <div class="widget-header widget-header-flat widget-header-small">
                                        <h5>
                                            <i class="icon-signal"></i>
                                            访问来源
                                        </h5>

                                        <div class="widget-toolbar no-border">
                                            <button class="btn btn-minier btn-primary dropdown-toggle"
                                                    data-toggle="dropdown">
                                                本周
                                                <i class="icon-angle-down icon-on-right bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
                                                <li class="active">
                                                    <a href="#" class="blue">
                                                        <i class="icon-caret-right bigger-110">&nbsp;</i>
                                                        本周
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                                        上周
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                                        本月
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                                        上月
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div id="piechart-placeholder"></div>

                                            <div class="hr hr8 hr-double"></div>

                                            <div class="clearfix">
                                                <div class="grid3">
															<span class="grey">
																<i class="icon-facebook-sign icon-2x blue"></i>
																&nbsp; likes
															</span>
                                                    <h4 class="bigger pull-right">1,255</h4>
                                                </div>

                                                <div class="grid3">
															<span class="grey">
																<i class="icon-twitter-sign icon-2x purple"></i>
																&nbsp; tweets
															</span>
                                                    <h4 class="bigger pull-right">941</h4>
                                                </div>

                                                <div class="grid3">
															<span class="grey">
																<i class="icon-pinterest-sign icon-2x red"></i>
																&nbsp; pins
															</span>
                                                    <h4 class="bigger pull-right">1,050</h4>
                                                </div>
                                            </div>
                                        </div><!-- /widget-main -->
                                    </div><!-- /widget-body -->
                                </div><!-- /widget-box -->
                            </div><!-- /span -->
                        </div><!-- /row -->

                        <div class="hr hr32 hr-dotted"></div>


                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->

    </div><!-- /.main-container-inner -->
    @include('layouts.sidebar')

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->
@include('layouts.footer')
</body>
</html>

