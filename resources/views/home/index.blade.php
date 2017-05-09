@extends('layouts.app')
@section('page-content')
    <div class="page-content">
        <div class="page-header">
            <h1>
                心情随笔
            </h1>
        </div><!-- /.page-header -->
        <div class="row well">
            <div class="col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="#">记一次proc_open没有开启心得感悟</a></h3>
                    </div>
                    <div class="panel-body">

                        摘要: 引言: 今天在部署服务器的时候，使用composer来安装依赖。遇到了 The Process class relies on proc_open, which is not
                        available on your PHP installation. 开始的时候，我有些不知所措，于是冷静下来思考一番，然阅读全文
                        <a href="#">阅读全文</a>
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="#">记一次proc_open没有开启心得感悟</a></h3>
                    </div>
                    <div class="panel-body">

                        摘要: 引言: 今天在部署服务器的时候，使用composer来安装依赖。遇到了 The Process class relies on proc_open, which is not
                        available on your PHP installation. 开始的时候，我有些不知所措，于是冷静下来思考一番，然阅读全文
                        <a href="#">阅读全文</a>
                    </div>
                </div>


                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="#">记一次proc_open没有开启心得感悟</a></h3>
                    </div>
                    <div class="panel-body">

                        摘要: 引言: 今天在部署服务器的时候，使用composer来安装依赖。遇到了 The Process class relies on proc_open, which is not
                        available on your PHP installation. 开始的时候，我有些不知所措，于是冷静下来思考一番，然阅读全文
                        <a href="#">阅读全文</a>
                    </div>
                </div>


                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="#">记一次proc_open没有开启心得感悟</a></h3>
                    </div>
                    <div class="panel-body">

                        摘要: 引言: 今天在部署服务器的时候，使用composer来安装依赖。遇到了 The Process class relies on proc_open, which is not
                        available on your PHP installation. 开始的时候，我有些不知所措，于是冷静下来思考一番，然阅读全文
                        <a href="#">阅读全文</a>
                    </div>
                </div>
                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div><!-- /.page-content -->
@endsection

@push('scripts')
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        var $sidebar = $('.sidebar').eq(0);
        if (!$sidebar.hasClass('h-sidebar')) return;

        $(document).on('settings.ace.top_menu', function (ev, event_name, fixed) {
            if (event_name !== 'sidebar_fixed') return;

            var sidebar = $sidebar.get(0);
            var $window = $(window);

            //return if sidebar is not fixed or in mobile view mode
            var sidebar_vars = $sidebar.ace_sidebar('vars');
            if (!fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] )) {
                $sidebar.removeClass('lower-highlight');
                //restore original, default marginTop
                sidebar.style.marginTop = '';

                $window.off('scroll.ace.top_menu')
                return;
            }


            var done = false;
            $window.on('scroll.ace.top_menu', function (e) {

                var scroll = $window.scrollTop();
                scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
                if (scroll > 17) scroll = 17;


                if (scroll > 16) {
                    if (!done) {
                        $sidebar.addClass('lower-highlight');
                        done = true;
                    }
                }
                else {
                    if (done) {
                        $sidebar.removeClass('lower-highlight');
                        done = false;
                    }
                }

                sidebar.style['marginTop'] = (17 - scroll) + 'px';
            }).triggerHandler('scroll.ace.top_menu');

        }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);

        $(window).on('resize.ace.top_menu', function () {
            $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);
        });


    });
</script>

@endpush