@extends('layouts.master')
@section('page-title','文章列表')
@section('page-styles')
    <!-- Custom styles for this template -->
    <link href="/css/blog-home.css" rel="stylesheet">
    {{--<link href="{{'css/blog-home.css'}}" rel="stylesheet">--}}
@endsection
@section('page-content')
    @include('layouts.partials.navigation',['class' => 'fixed-top'])
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Page Heading
                    <small>Secondary Text</small>
                </h1>

                @foreach($posts as $post)
                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{$post->title}}</h2>
                        <p class="card-text">{!! nl2br($post->content) !!}</p>
                        {{--{!!  !!} 表示以html輸出--}}
                        <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">閱讀全文 &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{$post->created_at->toDateString()}} by
                        <a href="{{url('about')}}">摔哥</a>
                    </div>
                </div>
                @endforeach
                <!-- Pagination -->
                {{$posts->links()}}


            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                @include('posts.partials.sidebar')
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
