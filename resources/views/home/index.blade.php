@extends('layouts.app')
@section('page-content')
    <div class="page-content">
        <div class="page-header">
            <h1>
                心情随笔
            </h1>
        </div><!-- /.page-header -->
        <div class="row">
            <div class="col-xs-8">
                @foreach($posts as $post)
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a href="{{route('post',['id'=>$post->id])}}">{{$post->title}}</a>
                            </h3>
                        </div>
                        <div class="panel-body">
                            {{$post->summary}}
                            <a href="{{route('post',['id'=>$post->id])}}">阅读全文</a>
                        </div>
                    </div>
            @endforeach
            <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div><!-- /.page-content -->
@endsection
