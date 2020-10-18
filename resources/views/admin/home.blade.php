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
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">{{ date('H') < 12 ? 'Good morning' : (date('H') < 16 ? 'Good Afternoon' : 'Good Evening') }}, {{ Str::before(Auth::user()->name, ' ') }}</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Yearly Sales -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card oh">
                        <div class="card-body">
                            <div class="d-flex m-b-30 align-items-center no-block">
                                <h5 class="card-title ">Trainings Report (Top 5 trainings)</h5>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12">
                                        @foreach($trainings as $training)
                                            <li><i class="fa fa-circle text-info"></i> {{ $training->name }}</li>
                                        @endforeach
                                        {{-- Training Names --}}
                                        <input type="hidden" id="n1" value="{{ $trainings[0]->name }}">
                                        <input type="hidden" id="n2" value="{{ $trainings[1]->name }}">
                                        <input type="hidden" id="n3" value="{{ $trainings[0]->name }}">
                                        <input type="hidden" id="n4" value="{{ $trainings[1]->name }}">
                                        {{-- Training Trainees --}}
                                        <input type="hidden" id="t1" value="{{ $trainings[0]->trainee_count }}">
                                        <input type="hidden" id="t2" value="{{ $trainings[1]->trainee_count }}">
                                        <input type="hidden" id="t3" value="{{ $trainings[0]->trainee_count }}">
                                        <input type="hidden" id="t4" value="{{ $trainings[1]->trainee_count }}">
                                        {{-- Trainee Income --}}
                                        <input type="hidden" id="i1" value="{{ $trainings[0]->price * $trainings[0]->trainee_count / 1000 }}">
                                        <input type="hidden" id="i2" value="{{ $trainings[1]->price * $trainings[1]->trainee_count / 1000  }}">
                                        <input type="hidden" id="i3" value="{{ $trainings[0]->price * $trainings[0]->trainee_count / 1000 }}">
                                        <input type="hidden" id="i4" value="{{ $trainings[1]->price * $trainings[1]->trainee_count / 1000 }}">
                                    </ul>
                                </div>
                            </div>
                            <div id="morris-area-chart" style="height: 350px;"></div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row text-center m-b-20">
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">{{ $trainings[0]->trainee_count + $trainings[1]->trainee_count + $trainings[0]->trainee_count + $trainings[1]->trainee_count }}+</h2><span class="text-muted">Total sale</span>
                                </div>
                                @foreach($trainings as $training)
                                    <div class="col-lg-2 col-md-2 m-t-20">
                                        <h2 class="m-b-0 font-light">{{ $training->trainee_count }}</h2><span class="text-muted">{{ $training->name }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Staffs</h5>
                            <h6 class="card-subtitle">Manage Staffs</h6>
                            <div class="steamline m-t-40">
                                <div class="sl-item">
                                    <div class="sl-left bg-primary"> <i class="fa fa-plus"></i></div>
                                    <div class="sl-right">
                                        <form action="{{ route('admin.store') }}" method="POST">
                                            @csrf
                                            <div><input type="email" class="form-control" placeholder="Email Address" name="email" required=""></div>
                                            <div class="desc">
                                                <select name="role" class="form-control" required="">
                                                    <option value="">Role</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="writer">Writer</option>
                                                    <option value="pm">Project Manager</option>
                                                </select>
                                                <br><button class="btn m-t-10 m-r-5 btn-rounded btn-outline-success" type="submit">Make Admin</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left bg-success"> <i class="fa fa-group"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Other Admins</div>
                                        <div class="desc"><a href="{{ route('admin.all') }}" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">View All</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Trainings</h5>
                            <h6 class="card-subtitle">Manage Training</h6>
                            <div class="steamline m-t-40 row">
                                <div class="sl-item col-6">
                                    <div class="sl-left bd-primary">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <div class="sl-right">
                                        <div class="font-medium">New Training</div>
                                        <div class="desc"><a href="{{ route('training.new') }}" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Create</a></div>
                                    </div>
                                </div>
                                <div class="sl-item col-6">
                                    <div class="sl-left bd-primary">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <div class="sl-right">
                                        <div class="font-medium">All Trainings</div>
                                        <div class="desc"><a href="{{ route('admin.trainings') }}" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">View</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- To do chat and message -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Feeds</h4>
                        </div>
                        <ul class="feeds p-b-20">
                            <li>
                                <div class="bg-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Messages (5 New)</h5>
                            @if(Auth::user()->notifications())
                                <div class="message-box">
                                    <div class="message-widget message-scroll">
                                        @foreach(Auth::user()->notifications() as $message)
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <span class="round">{{ Str::of($message->name)->limit(1, '') }}</span> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>{{ $message->name }}</h5> <span class="mail-desc">{!! $message->message !!}</span> <span class="time">{{ date('h:m A', strtotime($message->created_at)) }}</span> </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="message-box">
                                    <div class="message-widget message-scroll">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <span class="round">E</span> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Efico Bot</h5> <span class="mail-desc">You're only seeing this because you have no messages yet.</span> <span class="time">{{ date('h:m A') }}</span> </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection