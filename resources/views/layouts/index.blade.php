<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Dashboard - Ace Admin</title>
    <meta name="description" content="overview &amp; stats"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    @include('layouts.header')
</head>

<body class="no-skin">

@include('layouts.nav')
<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    @include('layouts.sidebar')
    <div class="main-content">
        <div class="main-content-inner">
            @include('layouts.breadcrumb')
            @yield('page-header')
            <div class="page-content">
                @include('layouts.settings')
                @yield('page-content')
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

    @include('layouts.footer')

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

@include('layouts.script')
</body>
</html>
