@extends('layouts.master')
@section('page-title','關於本站')
@section('page-content')
    @include('layouts.partials.navigation')
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">那些殺不死我的，將使我更堅強</h1>
          <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
          <ul class="list-unstyled">
            <li>Bootstrap 4.1.3</li>
            <li>jQuery 3.3.1</li>
          </ul>
        </div>
      </div>
    </div>
@endsection()
