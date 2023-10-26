@extends('admin.layouts.main')

@section('container')
<div class="app-content toggle-content">
    <div class="side-app">
    <!-- page-header -->
        <div class="page-header">
            <h1 class="page-title"><span class="subpage-title">Daftar</span> Barang</h1>
            <div class="ml-auto">
                <div class="input-group">
                    <a  class="btn btn-primary btn-icon text-white mr-2"  id="daterange-btn" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Calendar">
                        <span>
                            <i class="fe fe-calendar"></i>
                        </span>
                    </a>
                    <a href="#" class="btn btn-secondary btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Rating">
                        <span>
                            <i class="fe fe-star"></i>
                        </span>
                    </a>
                    <a href="#" class="btn btn-success btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Email">
                        <span>
                            <i class="fe fe-mail"></i>
                        </span>
                    </a>
                    <a href="#" class="btn btn-warning btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Chat">
                        <span>
                            <i class="fe fe-message-square"></i>
                        </span>
                    </a>
                    <a href="#" class="btn btn-info btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Add New">
                        <span>
                            <i class="fe fe-plus"></i>
                        </span>
                    </a>
                    <a href="#" class="btn btn-danger btn-icon" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Support">
                        <span>
                            <i class="fe fe-help-circle"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End page-header -->

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
