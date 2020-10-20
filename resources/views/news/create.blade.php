@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">New News</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.news') }}">News</a></li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div>
            {!! Form::open(['route' => 'news.store', 'method' => 'POST', 'files' => 'true',]) !!}
                {{ Form::text('title', '', $attributes = ['required' => "", 'placeholder' => "Title", 'class' => "form-control",]) }}
                <br><br>
                {{ Form::textarea('body', '', $attributes = ['required' => "", 'placeholder' => "Write Article Here", 'id' => "wysiwyg", 'class' => "form-control",]) }}
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::text('author', '', $attributes = ['required' => "", 'placeholder' => "Author", 'class' => "form-control",]) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::file('cover_image', $attributes = ['required' => "", 'class' => "form-control",]) }}
                    </div>
                </div>
                <br>
                {{ Form::submit('Post', $attributes = ['class' => "btn btn-primary form-control text-white", 'style' => "background-color: #3c185b; border: none;",]) }}
            {!! Form::close() !!}
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection