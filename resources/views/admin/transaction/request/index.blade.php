@extends('admin.layouts.main')

@section('style')
@endsection

@section('container')
<div class="app-content toggle-content">
    <div class="side-app">
    <!-- page-header -->
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-arrow mt-3">
                {{-- <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Elements</a></li> --}}
                <li class="active"><span>Transaksi/Peminjaman</span></li>
            </ol>
        </div>
        <!-- End page-header -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Daftar Peminjaman</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <form action="{{ route('category.index') }}" method="get" class="d-flex">
                                    @csrf
                                    <input type="search" class="form-control position-relative" name="search" id="search" value="{{ request('search') }}" placeholder="What are you looking for?">
                                    <button type="submit" class="btn btn-primary"><i class="fe fe-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table border table-bordered mb-0 text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="w-50">Nama</th>
                                        <th class="w-25">Tanggal Request</th>
                                        <th class="w-10">Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transactions as $item)
                                        <tr>
                                            <td>{{ $item->category }}</td>
                                            <td>
                                                <div class="d-flex flex-row">
                                                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#editCategory{{ $category->id }}"><i class="fe fe-edit"></i></button>
                                                    <div class="modal fade" id="editCategory{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title font-weight-bold" id="example-Modal2">Edit Category</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{ route('category.update', $category->id) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <label for="category" class="form-label">Kategori</label>
                                                                                <input type="text" class="form-control" id="category" name="category" value="{{ $category->category }}">
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label for="category_description" class="form-label">Deskripsi</label>
                                                                                <textarea class="form-control" name="category_description" id="category_description" rows="8">{{ $category->category_description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('category.destroy', $category->id) }}" id="deleteCategory{{ $category->id }}" onsubmit="deleteCategory(event, {{ $category->id }})" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"><i class="fe fe-trash-2"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-secondary"><i class="fe fe-slash"></i> Tidak ada data</td>
                                        </tr>
                                    @endforelse --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end align-items-center">
                        {{-- {{ $categories->links() }} --}}
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
                                <form action="{{ route('category.index') }}" method="get">
                                    @csrf
                                    <input type="text" placeholder="Search..." name="search" id="search" class="form-control search bg-danger">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text search_btn"><i class="fa fa-search"></i></span>
                                    </div>
                                </form>
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

@section('script')
    <script>
        function deleteCategory(event, id) {
            event.preventDefault();
            Swal.fire({
                title: 'Hapus',
                text: "Apakah Anda yakin ingin menghapus data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f5474b',
                cancelButtonColor: '#5964ff',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteCategory' + id).submit();
                }
            })
        }
    </script>
@endsection
