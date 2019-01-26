@extends('admin.layouts.master')

@section('title', '編輯文章')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                文章管理
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-shopping-bag"></i> 文章管理</a></li>
                <li class="active">編輯文章</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            <div class="row">
                <!-- .col -->
                <div class="col-md-12">
                    {{--錯誤訊息--}}
                    @include('admin.layouts.partials.alert')
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">編輯文章</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('admin.posts.update',$post->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            {{--html不允許post與get以外的mothod 故無法填入patch/put--}}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">標題</label>
                                    <input type="text" class="form-control" id="title" value="{{$post->title}}" placeholder="請輸入標題" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="category">分類</label>
                                    <select id="category" class="form-control">
                                        <option>分類一</option>
                                        <option>分類二</option>
                                        <option>分類三</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="content">內容</label>
                                    <textarea class="form-control" id="content" rows="5" placeholder="請輸入內容" name="content">{{$post->content}}</textarea>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer text-right">
                                <a class="btn btn-link" href="{{ route('admin.posts.index') }}">取消</a>
                                <button type="submit" class="btn btn-primary">更新</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
