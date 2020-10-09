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
                                <h5 class="card-title ">Trainings Report</h5>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12">
                                        <li><i class="fa fa-circle text-info"></i> Iphone</li>
                                        <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="morris-area-chart" style="height: 350px;"></div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row text-center m-b-20">
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">6000</h2><span class="text-muted">Total sale</span>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">4000</h2><span class="text-muted">Iphone</span>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">2000</h2><span class="text-muted">Ipad</span>
                                </div>
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
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- News -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h5 class="card-title">Sales Overview</h5>
                                    <h6 class="card-subtitle">Check the most recent sales </h6>
                                </div>
                                <div class="ml-auto">
                                    <select class="custom-select b-0">
                                        <option value="2" selected="">{{ date('M') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>NAME</th>
                                        <th>TRAINING</th>
                                        <th>DATE</th>
                                        <th>PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">Elite admin</td>
                                        <td class="txt-oflo">Sample Training</td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                        <td><span class="text-success">$24</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="txt-oflo">Real Homes WP Theme</td>
                                        <td class="txt-oflo">Sample Training</td>
                                        <td class="txt-oflo">April 19, 2017</td>
                                        <td><span class="text-info">$1250</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="txt-oflo">Ample Admin</td>
                                        <td class="txt-oflo">Sample Training</td>
                                        <td class="txt-oflo">April 19, 2017</td>
                                        <td><span class="text-info">$1250</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="txt-oflo">Medical Pro WP Theme</td>
                                        <td class="txt-oflo">Sample Training</td>
                                        <td class="txt-oflo">April 20, 2017</td>
                                        <td><span class="text-danger">-$24</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="txt-oflo">Hosting press html</td>
                                        <td class="txt-oflo">Sample Training</td>
                                        <td class="txt-oflo">April 21, 2017</td>
                                        <td><span class="text-success">$24</span></td>
                                    </tr>
                                </tbody>
                            </table>
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
                            <h5 class="card-title">Messages ({{ Count($messages->where('read', false)) }} New)</h5>
                            @if(Count($messages))
                                <div class="message-box">
                                    <div class="message-widget message-scroll">
                                        @foreach($messages as $message)
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <span class="round">{{ Str::of($message->name)->limit(1, '') }}</span> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>{{ $message->name }}</h5> <span class="mail-desc">{!! $message->message !!}</span> <span class="time">{{ date('h:m A', strtotime($message->created_at)) }}</span> </div>
                                            </a>
                                        @endforeach
                                        {{ $messages->links() }}
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