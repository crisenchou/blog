@extends('layouts.app')
@section('page-content')

    <div class="page-header">
        <h1>
            {{$post->title}}
        </h1>
    </div><!-- /.page-header -->
    <div class="page-content">
        <div class="row">
            <div class="col-xs-8">
                {!! $post->content  !!}
            </div><!-- /.col -->
            <div class="col-xs-4">
                recommend
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
@endsection