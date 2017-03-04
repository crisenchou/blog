@extends('layouts.app')
@section('title','crisen')
@section('head')
    @include('parts.css')
    @stack('css')
@endsection
@section('navbar')
    @include('parts.nav')
@endsection
@section('container')
    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {
            }
        </script>
        @include('parts.sidebar')
        <div class="main-content">
            <div class="main-content-inner">
                @yield('page-header')
                <div class="page-content">
                    @include('parts.settings')
                    @yield('page-content')
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        @include('parts.footer')
    </div><!-- /.main-container -->
@endsection
@section('scripts')
    @include('parts.script')
    @stack('scripts')
@endsection
