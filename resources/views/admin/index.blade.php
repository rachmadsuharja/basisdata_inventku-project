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

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">Project Summary</h3>
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
                            <div class="text-center mb-4">
                                <span class="avatar avatar-xxl brround cover-image" data-image-src="assets/images/users/male/2.jpg"></span>
                                <h5 class="text-uppercase mt-3 mb-0 font-weight-semibold">Roseann Graig</h5>
                                <p class="text-muted">Project Leader</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table border table-vcenter text-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Project</th>
                                            <td>Aajko</td>
                                        </tr>
                                        <tr>
                                            <th>Start Date</th>
                                            <td>20-09-2019</td>
                                        </tr>
                                        <tr>
                                            <th>End Date</th>
                                            <td>1-12-2019</td>
                                        </tr>
                                        <tr>
                                            <th>Team menbers</th>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <th>Project Status</th>
                                            <td>On Time</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="product-filter-desc">
                                <div class="product-filter-icons text-center">
                                    <a href="#" class="border text-primary p-0"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="border text-primary p-0"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="border text-primary p-0"><i class="fa fa-google"></i></a>
                                    <a href="#" class="border text-primary p-0"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">Project Log</h3>
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
                            <div class="activity1">
                                <div class="activity-blog">
                                    <div class="activity-img br-3 bg-primary-transparent text-primary">
                                        <i class="fe fe-message-square fs-20"></i>
                                    </div>
                                    <div class="activity-details">
                                        <p class="mb-0"> Adam Berry <b>New Comments</b></p>
                                        <small class="text-muted ">30 mins ago</small>
                                    </div>
                                </div>
                                <div class="activity-blog">
                                    <div class="activity-img br-3 bg-secondary-transparent text-secondary">
                                        <i class="fe fe-check fs-20"></i>
                                    </div>
                                    <div class="activity-details">
                                        <p class="mb-0"> Adam Berry <b>Task Finished</b></p>
                                        <small class="text-muted ">30 mins ago</small>
                                    </div>
                                </div>
                                <div class="activity-blog">
                                    <div class="activity-img br-3 bg-success-transparent text-success">
                                        <i class="fe fe-alert-triangle fs-20"></i>
                                    </div>
                                    <div class="activity-details">
                                        <p class="mb-0"> Adam Berry <b>Task Overdue</b></p>
                                        <small class="text-muted ">30 mins ago</small>
                                    </div>
                                </div>
                                <div class="activity-blog">
                                    <div class="activity-img br-3 bg-warning-transparent text-warning">
                                        <i class="fe fe-activity fs-20"></i>
                                    </div>
                                    <div class="activity-details">
                                        <p class="mb-0"> Adam Berry <b>Task Activitied</b></p>
                                        <small class="text-muted ">30 mins ago</small>
                                    </div>
                                </div>
                                <div class="activity-blog">
                                    <div class="activity-img br-3 bg-danger-transparent text-danger">
                                        <i class="fe fe-paperclip fs-20"></i>
                                    </div>
                                    <div class="activity-details">
                                        <p class="mb-0"> Adam Berry <b>Fix the bug report</b></p>
                                        <small class="text-muted ">30 mins ago</small>
                                    </div>
                                </div>
                                <div class="activity-blog">
                                    <div class="activity-img br-3 bg-pink-transparent text-pink">
                                        <i class="fe fe-layers fs-20"></i>
                                    </div>
                                    <div class="activity-details">
                                        <p class="mb-0"> Adam Berry <b>Task Completed</b></p>
                                        <small class="text-muted ">30 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <a class="text-center btn btn-primary" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">Work Activity</h3>
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
                        <div class="card-body p-0">
                            <div class="p-5 border-bottom">
                                <p class=" mb-0 ">Complete Projects</p>
                                <h3 class="mb-0 number-font">789<span class="fs-12 text-muted">
                                    <span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>0.15%</span>last year</span>
                                </h3>
                                <div class="row mt-3">
                                    <div class="col-sm-4 border-right mb-4 mb-md-0">
                                        <p class="mb-0 text-muted">This Week</p><h5 class="mb-0">234</h5>
                                    </div>
                                    <div class="col-sm-4 border-right mb-4 mb-md-0">
                                        <p class="mb-0 text-muted">Last Week</p><h5 class="mb-0">346</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="mb-0 text-muted">Total</p><h5 class="mb-0">580</h5>
                                    </div>
                                </div>
                                <div class="progress progress-md h-1 mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-80"></div>
                                </div>
                            </div>
                            <div class="p-5 border-bottom">
                                <p class=" mb-0 ">Pending Projects</p>
                                <h3 class="mb-0 number-font">388<span class="fs-12 text-muted">
                                    <span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.5%</span>last year</span>
                                </h3>
                                <div class="row mt-3">
                                    <div class="col-sm-4 border-right mb-4 mb-md-0">
                                        <p class="mb-0 text-muted">This Week</p><h5 class="mb-0">156</h5>
                                    </div>
                                    <div class="col-sm-4 border-right mb-4 mb-md-0">
                                        <p class="mb-0 text-muted">Last Week</p><h5 class="mb-0">223</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="mb-0 text-muted">Total</p><h5 class="mb-0">379</h5>
                                    </div>
                                </div>
                                <div class="progress progress-md h-1 mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-60"></div>
                                </div>
                            </div>
                            <div class="p-5">
                                <p class=" mb-0">Future Projects</p>
                                <h3 class="mb-0 number-font">419<span class="fs-12 text-muted">
                                    <span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>1.25%</span>last year</span>
                                </h3>
                                <div class="row mt-3">
                                    <div class="col-sm-4 border-right mb-4 mb-md-0">
                                        <p class="mb-0 text-muted">This Week</p><h5 class="mb-0">89</h5>
                                    </div>
                                    <div class="col-sm-4 border-right mb-4 mb-md-0">
                                        <p class="mb-0 text-muted">Last Week</p><h5 class="mb-0">167</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="mb-0 text-muted">Total</p><h5 class="mb-0">256</h5>
                                    </div>
                                </div>
                                <div class="progress progress-md h-1 mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-90"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">Project Details</h3>
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
                            <div class="table-responsive">
                                <table class="table border table-bordered mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Team Lead</th>
                                            <th>Team Members</th>
                                            <th>Category</th>
                                            <th>Budget</th>
                                            <th>Project Status</th>
                                            <th>Deadline</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Project 01</td>
                                            <td><img src="assets/images/users/female/4.jpg" class="w-5 h-5 avatar brround" alt=""> Harriett Lauver</td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/2.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/1.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/9.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/2.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/4.jpg" alt="img"></span>
                                                </div>
                                            </td>
                                            <td>Web Design</td>
                                            <td><b>$10513.00</b></td>
                                            <td>
                                                <div class="row mb-1">
                                                    <div class="col"> Status </div> <div class="col col-auto"> 70% </div>
                                                </div>
                                                <div class="progress progress-sm h-1">
                                                    <div class="progress-bar bg-secondary w-70" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td>10 Dec 2019</td>
                                        </tr>
                                        <tr>
                                            <td>Project 02</td>
                                            <td><img src="assets/images/users/female/5.jpg" class="w-5 h-5 avatar brround" alt=""> Vashti Riccio</td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/2.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/1.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/9.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/10.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/3.jpg" alt="img"></span>
                                                </div>
                                            </td>
                                            <td>Web Developement</td>
                                            <td><b>$96584.00</b></td>
                                            <td>
                                                <div class="row mb-1">
                                                    <div class="col"> Status </div>
                                                    <div class="col col-auto"> 60% </div>
                                                </div>
                                                <div class="progress progress-sm h-1">
                                                    <div class="progress-bar bg-primary w-60" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td>10 Nov 2019</td>
                                        </tr>
                                        <tr>
                                            <td>Project 03</td>
                                            <td><img src="assets/images/users/male/4.jpg" class="w-5 h-5 avatar brround" alt=""> Darci Faw</td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/2.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/2.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/9.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/2.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/4.jpg" alt="img"></span>
                                                </div>
                                            </td>
                                            <td>Wordpress</td>
                                            <td><b>$45879.00</b></td>
                                            <td>
                                                <div class="row mb-1">
                                                    <div class="col"> Status </div>
                                                    <div class="col col-auto"> 40% </div>
                                                </div>
                                                <div class="progress progress-sm h-1">
                                                    <div class="progress-bar bg-info w-40" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td>10 Dec 2019</td>
                                        </tr>
                                        <tr>
                                            <td>Project 04</td>
                                            <td><img src="assets/images/users/female/1.jpg" class="w-5 h-5 avatar brround" alt=""> Corene Hirschman</td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/1.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/2.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/9.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/8.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/6.jpg" alt="img"></span>
                                                </div>
                                            </td>
                                            <td>Angular</td>
                                            <td><b>$68547.00</b></td>
                                            <td>
                                                <div class="row mb-1">
                                                    <div class="col"> Status </div>
                                                    <div class="col col-auto"> 70% </div>
                                                </div>
                                                <div class="progress progress-sm h-1">
                                                    <div class="progress-bar bg-secondary w-70" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td>21 Feb 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Project 05</td>
                                            <td><img src="assets/images/users/male/3.jpg" class="w-5 h-5 avatar brround" alt=""> Jamie Norville</td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/3.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/4.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/5.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/1.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/2.jpg" alt="img"></span>
                                                </div>
                                            </td>
                                            <td>Web Design</td>
                                            <td><b>$47854.00</b></td>
                                            <td>
                                                <div class="row mb-1">
                                                    <div class="col"> Status </div>
                                                    <div class="col col-auto"> 50% </div>
                                                </div>
                                                <div class="progress progress-sm h-1">
                                                    <div class="progress-bar bg-primary w-50" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td>21 Apr 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Project 06</td>
                                            <td><img src="assets/images/users/female/3.jpg" class="w-5 h-5 avatar brround" alt=""> Danae Kaba</td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/6.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/7.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/8.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/3.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/4.jpg" alt="img"></span>
                                                </div>
                                            </td>
                                            <td>Web Developemnt</td>
                                            <td><b>$69587.00</b></td>
                                            <td>
                                                <div class="row mb-1">
                                                    <div class="col"> Status </div>
                                                    <div class="col col-auto"> 60% </div>
                                                </div>
                                                <div class="progress progress-sm h-1">
                                                    <div class="progress-bar bg-info w-60" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td>16 May 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Project 07</td>
                                            <td><img src="assets/images/users/female/7.jpg" class="w-5 h-5 avatar brround" alt=""> Harriett Lauver</td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/9.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/10.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/5.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/6.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/7.jpg" alt="img"></span>
                                                </div>
                                            </td>
                                            <td>Wordpress</td>
                                            <td><b>$78549.00</b></td>
                                            <td>
                                                <div class="row mb-1">
                                                    <div class="col"> Status </div>
                                                    <div class="col col-auto"> 80% </div>
                                                </div>
                                                <div class="progress progress-sm h-1">
                                                    <div class="progress-bar bg-success w-80" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td>16 Feb 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Project 08</td>
                                            <td><img src="assets/images/users/male/4.jpg" class="w-5 h-5 avatar brround" alt=""> Jeromy Tricarico</td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/2.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/2.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/8.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/female/9.jpg" alt="img"></span>
                                                    <span><img class="avatar brround mr-2 mCS_img_loaded" src="assets/images/users/male/10.jpg" alt="img"></span>
                                                </div>
                                            </td>
                                            <td>Angular</td>
                                            <td><b>$96587.00</b></td>
                                            <td>
                                                <div class="row mb-1">
                                                    <div class="col"> Status </div>
                                                    <div class="col col-auto"> 20% </div>
                                                </div>
                                                <div class="progress progress-sm h-1">
                                                    <div class="progress-bar bg-danger w-20" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td>18 Jan 2020</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

        </div><!--End side app-->
            <!-- Right-sidebar-->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="tab-menu-heading siderbar-tabs border-0">
                <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class=""><a href="#tab1" class="active" data-toggle="tab">Chat</a></li>
                        <li><a href="#tab2" data-toggle="tab">Activity</a></li>
                        <li><a href="#tab3" data-toggle="tab">Todo</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
                <div class="tab-content border-top">
                    <div class="tab-pane active" id="tab1">
                        <div class="chat">
                            <div class="contacts_card">
                                <div class="input-group p-3">
                                    <input type="text" placeholder="Search..." class="form-control search">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text search_btn  "><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                                <ul class="contacts mb-0">
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/users/male/3.jpg" class="rounded-circle user_img" alt="img">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <h6 class="mt-1 mb-0 ">Maryam Naz</h6>
                                                <small class="text-muted">Maryam is online</small>
                                            </div>
                                            <div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/users/female/1.jpg" class="rounded-circle user_img" alt="img">

                                            </div>
                                            <div class="user_info">
                                                <h6 class="mt-1 mb-0 ">Sahar Darya</h6>
                                                <small class="text-muted">Sahar left 7 mins ago</small>
                                            </div>
                                            <div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/users/female/9.jpg" class="rounded-circle user_img" alt="img">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <h6 class="mt-1 mb-0 ">Maryam Naz</h6>
                                                <small class="text-muted">Maryam is online</small>
                                            </div>
                                            <div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/users/female/10.jpg" class="rounded-circle user_img" alt="img">

                                            </div>
                                            <div class="user_info">
                                                <h6 class="mt-1 mb-0 ">Yolduz Rafi</h6>
                                                <small class="text-muted">Yolduz is online</small>
                                            </div>
                                            <div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/users/male/5.jpg" class="rounded-circle user_img" alt="img">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <h6 class="mt-1 mb-0 ">Nargis Hawa</h6>
                                                <small class="text-muted">Nargis left 30 mins ago</small>
                                            </div>
                                            <div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/users/male/7.jpg" class="rounded-circle user_img" alt="img">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
                                                <small class="text-muted">Khadija left 50 mins ago</small>
                                            </div>
                                            <div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/users/female/8.jpg" class="rounded-circle user_img" alt="img">

                                            </div>
                                            <div class="user_info">
                                                <h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
                                                <small class="text-muted">Khadija left 50 mins ago</small>
                                            </div>
                                            <div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  " id="tab2">
                        <div class="list d-flex align-items-center border-bottom p-4">
                            <div class="">
                                <span class="avatar bg-primary brround avatar-md">CH</span>
                            </div>
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0 d-flex">
                                    <b>New Websites is Created</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <small class="text-muted ml-auto">30 mins ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-4">
                            <div class="">
                                <span class="avatar bg-danger brround avatar-md">N</span>
                            </div>
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0 d-flex">
                                    <b>Prepare For the Next Project</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <small class="text-muted ml-auto">2 hours ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-4">
                            <div class="">
                                <span class="avatar bg-info brround avatar-md">S</span>
                            </div>
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0 d-flex">
                                    <b>Decide the live Discussion Time</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <small class="text-muted ml-auto">3 hours ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-4">
                            <div class="">
                                <span class="avatar bg-warning brround avatar-md">K</span>
                            </div>
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0 d-flex">
                                    <b>Team Review meeting at yesterday at 3:00 pm</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <small class="text-muted ml-auto">4 hours ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-4">
                            <div class="">
                                <span class="avatar bg-success brround avatar-md">R</span>
                            </div>
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0 d-flex">
                                    <b>Prepare for Presentation</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <small class="text-muted ml-auto">1 days ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center  border-bottom p-4">
                            <div class="">
                                <span class="avatar bg-pink brround avatar-md">MS</span>
                            </div>
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0 d-flex">
                                    <b>Prepare for Presentation</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <small class="text-muted ml-auto">1 days ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-4">
                            <div class="">
                                <span class="avatar bg-purple brround avatar-md">L</span>
                            </div>
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0 d-flex">
                                    <b>Prepare for Presentation</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <small class="text-muted ml-auto">45 mintues ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center p-4">
                            <div class="">
                                <span class="avatar bg-blue brround avatar-md">U</span>
                            </div>
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0 d-flex">
                                    <b>Prepare for Presentation</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <small class="text-muted ml-auto">2 days ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="">
                            <div class="d-flex p-3">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                    <span class="custom-control-label">Do Even More..</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="d-flex p-3 border-top">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked="">
                                    <span class="custom-control-label">Find an idea.</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="d-flex p-3 border-top">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" checked="">
                                    <span class="custom-control-label">Hangout with friends</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="d-flex p-3 border-top">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" >
                                    <span class="custom-control-label">Do Something else</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="d-flex p-3 border-top">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5" >
                                    <span class="custom-control-label">Eat healthy, Eat Fresh..</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="d-flex p-3 border-top">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6" checked="">
                                    <span class="custom-control-label">Finsh something more..</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="d-flex p-3 border-top">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7" checked="">
                                    <span class="custom-control-label">Do something more</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="d-flex p-3 border-top">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8" >
                                    <span class="custom-control-label">Updated more files</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="d-flex p-3 border-top">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9" >
                                    <span class="custom-control-label">System updated</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="d-flex p-3 border-top border-bottom">
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox10" value="option10" >
                                    <span class="custom-control-label">Settings Changings...</span>
                                </label>
                                <span class="ml-auto">
                                    <i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
                                    <i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
                                </span>
                            </div>
                            <div class="text-center pt-5">
                                <a href="#" class="btn btn-primary">Upgrade more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Rightsidebar-->
    </div><!-- End app-content-->
@endsection
