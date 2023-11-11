@extends('client.layouts.main')
{{-- <style>
    .table thead tr th {
        text-align: center;
    }
</style> --}}
@section('container')
    <div class="page-content">
        <div class="container text-center text-dark">
            <div class="row">
                <div class="col-lg-8 d-block mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="header d-flex flex-column mb-6">
                                        <h2 class="fw-bold mt-3 mb-2" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 1.6rem">Invent<span class="text-primary">Ku</span></h2>
                                        <h5 class="p-0 m-0">Gudangnya Barang Berkualitas</h5>
                                    </div>
                                    <form action="" method="post">
                                        @csrf
                                        <div class="row text-left mx-2">
											<div class="col-xl-12">
												<div class="form-group">
													<label class="form-label">Nama</label>
													<input type="text" class="form-control" name="example-text-input" placeholder="Nama Anda ...">
												</div>

												<div class="form-group">
													<label class="form-label">Email</label>
													<input type="email" class="form-control" name="example-text-input" placeholder="Email Anda ...">
												</div>
{{--
                                                <div class="form-group">
                                                    <label class="form-label">Kategori</label>
                                                    <select class="form-control select2-show-search" id="category_id" name="category_id" data-placeholder="Pilih Kategori">
                                                        <optgroup label="Kategori">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div> --}}
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label">Barang</label>
                                                            <select class="form-control select2-show-search" id="barang" name="barang" data-placeholder="Pilih Barang">
                                                                <optgroup label="Barang">
                                                                    <option value="" disabled selected></option>
                                                                    @foreach ($items as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Jumlah</label>
                                                            <input type="text" class="form-control @error('unit') is-invalid state-invalid @enderror" id="unit" name="unit" placeholder="Satuan Barang" value="{{ old('unit') }}">
                                                            @error('unit')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
											</div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script>
        let selectedCategory = $('#category_id');
        let paymentNumberLabel = $('#paymentNumberLabel');
        const bankProvider = `<label for="paymentProviderList">Layanan</label>
            <select class="form-select" name="layananRefund" id="paymentProviderList">
                <option value="Bank BRI">Bank BRI</option>
                <option value="Bank BCA">Bank BCA</option>
                <option value="Bank Mandiri">Bank Mandiri</option>
            </select>`;
        const ewalletProvider = `<label for="paymentProviderList">Layanan</label>
            <select class="form-select" name="layananRefund" id="paymentProviderList">
                <option value="DANA">DANA</option>
                <option value="OVO">OVO</option>
                <option value="GoPay">GoPay</option>
                <option value="LinkAja">LinkAja</option>
            </select>`;

        $('#category_id').on('change', function () {
            let categoryId = $(this).val();
            $.ajax({
                url: '/request-item',
                type: 'POST',
                data: { category_id: categoryId },
                success: function (response) {
                    console.log('berhasil');
                },
                error: function (xhr, status, error) {
                    // Penanganan error jika terjadi kesalahan
                    console.log(error);
                }
            });
        })
    </script> --}}
@endsection
