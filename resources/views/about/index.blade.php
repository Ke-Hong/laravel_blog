@extends('layouts.master')
@section('page-title','關於本站')
@section('page-content')
    @include('layouts.partials.navigation')
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">摔哥</h1>
          <p class="lead">一個每天早上都帥到摔跤的男人</p>
          <ul class="list-unstyled">
            <li>Bootstrap 4.1.3</li>
            <li>jQuery 3.3.1</li>
          </ul>
        </div>
      </div>
    </div>
@endsection()
