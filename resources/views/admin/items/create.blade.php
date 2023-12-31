@extends('admin.layouts.main')
{{-- <style>
    .table thead tr th {
        text-align: center;
    }
</style> --}}
@section('container')
<div class="app-content toggle-content">
    <div class="side-app">
    <!-- page-header -->
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-arrow mt-3">
                <li><a href="{{ route('items.index') }}">Manajemen Barang</a></li>
                <li class="active"><span>Tambah Barang</span></li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card overflow-hidden">
                    <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">Daftarkan Barang Baru Anda</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="code">Kode</label>
                                        <input type="text" class="form-control @error('code') is-invalid state-invalid @enderror" id="code" name="code" placeholder="Kode Barang" value="{{ old('code') }}">
                                        @error('code')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="name">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid state-invalid @enderror" id="name" name="name" placeholder="Nama Barang" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-control select2-show-search" id="category_id" name="category_id" data-placeholder="Choose one (with searchbox)">
                                            <optgroup label="Kategori Barang">
                                                @for($i = 1; $i <= 10000; $i++)
                                                    <option value="">{{ $i }}</option>
                                                @endfor
                                                {{-- @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                @endforeach --}}
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label" for="stock">Stok</label>
                                                <input type="number" class="form-control @error('stock') is-invalid state-invalid @enderror" id="stock" name="stock" placeholder="Stok Barang" value="{{ old('stock') }}">
                                                @error('stock')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Satuan</label>
                                                <input type="text" class="form-control @error('unit') is-invalid state-invalid @enderror" id="unit" name="unit" placeholder="Satuan Barang" value="{{ old('unit') }}">
                                                @error('unit')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="price">Harga</label>
                                        <div class="row gutters-sm">
                                            <div class="col">
                                                <input type="number" class="form-control @error('price') is-invalid state-invalid @enderror" id="price" name="price" placeholder="Harga Barang (Rupiah)" value="{{ old('price') }}">
                                                @error('price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <span class="col-auto align-self-center">
                                                <span class="form-help" data-toggle="popover" data-placement="top"
                                                data-content="<p>Rupiah merupakan mata uang resmi Indonesia yang diterbitkan dan dikendalikan oleh Bank Indonesia. Silahkan konversikan ke Rupiah terlebih dahulu jika Anda ingin memastikan harga dari mata uang Asing.</p><p class='mb-0'><a href='https://www.bi.go.id/id/statistik/informasi-kurs/transaksi-bi/kalkulator-kurs.aspx' target='_blank'>Kalkulator Kurs Rupiah</a></p>" data-original-title="" title="">?</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Foto</label>
                                        <input type="file" class="dropify form-control @error('image') is-invalid state-invalid @enderror" name="image" id="image">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="item_description" class="form-label">Deskripsi (Opsional)</label>
                                    <textarea name="item_description" id="item_description" rows="8" class="form-control" placeholder="Deskripsi Barang ...">{{ old('item_description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('items.index') }}" class="btn btn-danger">Batal</a>
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
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
