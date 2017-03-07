@extends('layouts.app')
@section('title','crisen')
@section('skin','no-skin')
@section('head')
    @include('parts.css')
    @stack('css')
@endsection
@section('navbar')
    <div id="navbar" class="navbar navbar-default  ace-save-state">
        <div class="navbar-container ace-save-state container" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="index.html" class="navbar-brand">
                    <small>
                        <i class="fa fa-leaf"></i>
                        crisenchou
                    </small>
                </a>
            </div>
        </div><!-- /.navbar-container -->
    </div>
@endsection
@section('container')
    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {
            }
        </script>

        <div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {
                }
            </script>
            @include('parts.menus')

        </div>
        <div class="main-content">
            <div class="main-content-inner">
                @yield('breadcrumbs')
                @yield('page-content')
            </div>
        </div><!-- /.main-content -->

        @include('parts.footer')
    </div><!-- /.main-container -->
@endsection
@section('scripts')
    <!--[if !IE]> -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="assets/js/bootstrap.min.js"></script>

    @stack('plugins')
    <!-- page specific plugin scripts -->

    <!-- ace scripts -->
    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>

    @stack('scripts')
@endsection
