@extends('admin.layouts.main')

@section('container')
    <!-- app-content-->
    <div class="app-content toggle-content">
        <div class="side-app">
        <!-- page-header -->
            <div class="page-header">
                <h1 class="page-title"><span class="subpage-title">Hai,</span> {{ Auth::user()->name }}!</h1>
            </div>
            <!-- End page-header -->


            <!-- Row -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex mb-4">
                                <span class="avatar align-self-center avatar-lg br-3 cover-image bg-primary-transparent">
                                    <i class="fe fe-users text-primary"></i>
                                </span>
                                <div class="svg-icons text-right ml-auto">
                                    <p class="text-muted mb-2">Total Users</p>
                                    <h2 class="mb-0 number-font1">25,356</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex mb-4">
                                <span class="avatar align-self-center avatar-lg br-3 cover-image bg-secondary-transparent">
                                    <i class="fe fe-list text-secondary"></i>
                                </span>
                                <div class="svg-icons text-right ml-auto">
                                    <p class="text-muted">Total Kategori</p>
                                    <h2 class="mb-0 number-font">26,536</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex mb-4">
                                <span class="avatar align-self-center avatar-lg br-3 cover-image bg-success-transparent">
                                    <i class="fe fe-box text-success"></i>
                                </span>
                                <div class="svg-icons text-right ml-auto">
                                    <p class="text-muted">Total Barang</p>
                                    <h2 class="mb-0 number-font">17,356</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex mb-4">
                                <span class="avatar align-self-center avatar-lg br-3 cover-image bg-warning-transparent">
                                    <i class="fe fe-file-text text-warning"></i>
                                </span>
                                <div class="svg-icons text-right ml-auto">
                                    <p class="text-muted">Total Request</p>
                                    <h2 class="mb-0 number-font">65,458</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">Project Budget</h3>
                            </div>
                            <div class="card-options">
                                <a href="#" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                    <span class="fe fe-more-horizontal fs-20"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
                                    <li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
                                    <li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
                                    <li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
                                    <li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 mb-5">
                                    <div class="d-flex"><div class="w-2 h-2 bg-secondary mr-2 mt-1 mb-1"></div><p class="mb-1">Total Budget</p></div>
                                    <h3 class="mb-0 number-font1">$4,59,871 <span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down"></i>0.9%</span>last project</span></h3>
                                </div>
                                <div class="col-6 mb-5">
                                    <div class="d-flex"><div class="w-2 h-2 bg-success mr-2 mt-1 mb-1"></div><p class="mb-1">Remaining</p></div>
                                    <h3 class="mb-0 number-font1">$12,567 <span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down"></i>0.9%</span>last project</span></h3>
                                </div>
                            </div>
                            <div>
                                <canvas id="budget" class="h-250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">Project Activity</h3>
                            </div>
                            <div class="card-options">
                                <a href="#" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                    <span class="fe fe-more-horizontal fs-20"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
                                    <li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
                                    <li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
                                    <li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
                                    <li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="activity">
                                <img src="assets/images/users/male/5.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity">
                                        <p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
                                        <small class="text-muted ">30 mins ago</small>
                                    </div>
                                </div>
                                <img src="assets/images/users/female/6.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity">
                                        <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
                                        <small class="text-muted ">1 days ago</small>
                                    </div>
                                </div>
                                <img src="assets/images/users/male/7.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity">
                                        <p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
                                        <small class="text-muted ">3 days ago</small>
                                    </div>
                                </div>
                                <img src="assets/images/users/female/8.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity mb-0">
                                        <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
                                        <small class="text-muted ">5 days ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row -->
        </div>
    </div><!-- End app-content-->
@endsection
