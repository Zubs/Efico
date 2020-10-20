@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles justify-content-center">
                <div class="col-md-4">
                	<div class="card shadow-lg rounded" style="background: rgba(60, 24, 91, 0.2);">
                		<div class="card-body text-center py-5">
                			<i class="fa fa-file fa-5x"></i>
                			<br><br>
                			<h1>{{ count($posts) }} Posts</h1>
                		</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="card shadow-lg rounded" style="background: rgba(60, 24, 91, 0.2);">
                		<div class="card-body text-center py-5">
                			<i class="fa fa-comments fa-5x"></i>
                			<br><br>
                			<h1>{{ count($comments) }} Comments</h1>
                		</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="card shadow-lg rounded" style="background: rgba(60, 24, 91, 0.2);">
                		<div class="card-body text-center py-5">
                			<i class="fa fa-eye fa-5x"></i>
                			<br><br>
                			<h1>0 Views</h1>
                		</div>
                	</div>
                </div>
            </div>
            <div class="row page-titles justify-content-center">
                <div class="col-md-4">
                	<div class="card shadow-lg rounded" style="background: rgba(60, 24, 91, 0.2);" onclick="window.location = '{{ route('news.new') }}'">
                		<div class="card-body text-center py-5">
                			<i class="fa fa-file fa-5x"></i>
                			<br><br>
                			<h1>New Post</h1>
                		</div>
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="card shadow-lg rounded" style="background: rgba(60, 24, 91, 0.2);" onclick="window.location = '{{ route('admin.news') }}'">
                		<div class="card-body text-center py-5">
                			<i class="fa fa-list fa-5x"></i>
                			<br><br>
                			<h1>All Posts</h1>
                		</div>
                	</div>
                </div>
            </div>
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