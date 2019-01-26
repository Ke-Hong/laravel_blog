@extends('admin.layouts.master')

@section('title', '文章列表')

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
            <li class="active">文章列表</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <!--------------------------
          | Your Page Content Here |
          -------------------------->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">全站文章一覽表</h3>

                        <div class="box-tools">
                            <a class="btn btn-success btn-sm" href="{{ route('admin.posts.create') }}">新增文章</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center" style="width: 10px;">#</th>
                                <th class="text-center">標題</th>
                                <th class="text-center" style="width: 120px">管理功能</th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}.</td>
                                <td>{{$post->title}}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-xs btn-primary">編輯</a>
                                    <form action="{{route('admin.posts.destroy',$post->id)}}" method="post" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger">刪除</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
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
