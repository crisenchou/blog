@extends('layouts.app')

@push('css')
<!-- page specific plugin styles -->
<link rel="stylesheet" href="assets/css/colorbox.min.css"/>
@endpush

@section('page-content')

    <div class="page-content">
        <div class="page-header">
            <h1>
                时光
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <ul class="ace-thumbnails clearfix">
                    <li>
                        <a href="assets/images/gallery/image-2.jpg" data-rel="colorbox" class="cboxElement">
                            <img alt="150x150" src="assets/images/gallery/thumb-2.jpg">
                            <div class="text">
                                <div class="inner">Sample Caption on Hover</div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <div>
                            <img alt="150x150" src="assets/images/gallery/thumb-5.jpg">
                            <div class="text">
                                <div class="inner">
                                    <span>Some Title!</span>
                                    <br>
                                    <a href="assets/images/gallery/image-5.jpg" data-rel="colorbox"
                                       class="cboxElement">
                                        <i class="ace-icon fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div>
                            <img alt="150x150" src="assets/images/gallery/thumb-5.jpg" width="150" height="150">
                            <div class="text">
                                <div class="inner">
                                    <span>Some Title!</span>
                                    <br>
                                    <a href="assets/images/gallery/image-5.jpg" data-rel="colorbox"
                                       class="cboxElement">
                                        <i class="ace-icon fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div>
                            <img alt="150x150" src="assets/images/gallery/thumb-5.jpg" width="150" height="150">
                            <div class="text">
                                <div class="inner">
                                    <span>Some Title!</span>
                                    <br>
                                    <a href="assets/images/gallery/image-5.jpg" data-rel="colorbox"
                                       class="cboxElement">
                                        <i class="ace-icon fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div>
                            <img alt="150x150" src="assets/images/gallery/thumb-5.jpg" width="150" height="150">
                            <div class="text">
                                <div class="inner">
                                    <span>Some Title!</span>
                                    <br>
                                    <a href="assets/images/gallery/image-5.jpg" data-rel="colorbox"
                                       class="cboxElement">
                                        <i class="ace-icon fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div>
                            <img alt="150x150" src="assets/images/gallery/thumb-5.jpg" width="150" height="150">
                            <div class="text">
                                <div class="inner">
                                    <span>Some Title!</span>
                                    <br>
                                    <a href="assets/images/gallery/image-5.jpg" data-rel="colorbox"
                                       class="cboxElement">
                                        <i class="ace-icon fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div><!-- /.col -->
        </div>


    </div><!-- /.page-content -->
@endsection

@push('scripts')
<!-- page specific plugin scripts -->
<script src="assets/js/jquery.colorbox.min.js"></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        var $overflow = '';
        var colorbox_params = {
            rel: 'colorbox',
            reposition: true,
            scalePhotos: true,
            scrolling: false,
            previous: '<i class="ace-icon fa fa-arrow-left"></i>',
            next: '<i class="ace-icon fa fa-arrow-right"></i>',
            close: '&times;',
            current: '{current} of {total}',
            maxWidth: '100%',
            maxHeight: '100%',
            onOpen: function () {
                $overflow = document.body.style.overflow;
                document.body.style.overflow = 'hidden';
            },
            onClosed: function () {
                document.body.style.overflow = $overflow;
            },
            onComplete: function () {
                $.colorbox.resize();
            }
        };

        $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
        $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon


        $(document).one('ajaxloadstart.page', function (e) {
            $('#colorbox, #cboxOverlay').remove();
        });
    })
</script>
@endpush