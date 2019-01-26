@extends('layouts.master')
@section('page-title','文章內容')
@section('page-styles')
    <!-- Custom styles for this template -->
    <link href="/css/blog-post.css" rel="stylesheet">
@endsection
@section('page-content')
    @include('layouts.partials.navigation',['class' => 'fixed-top'])
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8" style=""
          >

          <!-- Title -->
          <h1 class="mt-4">{{$post->title}}</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="{{url('about')}}">摔哥</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{$post->created_at->toDateTimeString()}}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr>

          <!-- Post Content -->

            {{--<blockquote class="blockquote">--}}
            {{--<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>--}}
            {{--<footer class="blockquote-footer">Someone famous in--}}
            {{--<cite title="Source Title">Source Title</cite>--}}
            {{--</footer>--}}
            {{--</blockquote>--}}
            {{$post->content}}
         <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div>

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
