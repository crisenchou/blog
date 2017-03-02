<!DOCTYPE html>
<html lang="en">

@include('layouts.header')
<body class="no-skin">

@include('layouts.nav')
<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    @include('layouts.sidebar')

    <div class="main-content">
        <div class="main-content-inner">
          @include('layouts.breadcrumb')
            <div class="page-content">
                @include('layouts.settings')
                <div class="page-header">
                    <h1>
                        Dashboard
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            overview &amp; stats
                        </small>
                    </h1>
                </div><!-- /.page-header -->
                @yield('content')

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
