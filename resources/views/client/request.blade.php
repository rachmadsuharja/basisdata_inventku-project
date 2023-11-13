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
                                    <form action="{{ route('cart.store') }}" method="post">
                                        @csrf
                                        <div class="row text-left mx-2">
											<div class="col-xl-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-8">
                                                        <div class="form-group mb-0">
                                                            <label class="form-label">Barang</label>
                                                            <select class="form-control select2-show-search mb-0 @error('item') is-invalid @enderror" id="item" name="item" data-placeholder="Pilih Barang"></select>
                                                        </div>
                                                        @error('item')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        <p class="p-2 fs-10" id="stock"></p>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Jumlah</label>
                                                            <input type="text" class="form-control @error('item_amount') is-invalid state-invalid @enderror" id="item_amount" name="item_amount" placeholder="Jumlah barang" value="{{ old('item_amount') }}">
                                                            @error('item_amount')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-8 ">
                                                        <button type="submit" class="btn btn-primary btn-block font-weight-bold">Masukkan ke keranjang</button>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4">
                                                        <button type="button" data-toggle="modal" data-target="#myCart" class="btn btn-outline-warning btn-block"><i class="fa fa-cart-plus"></i> Keranjang Anda</button>
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

    {{-- ALL MODAL IN HERE (Only Create Form in Modal) --}}
    <div class="modal fade" id="myCart" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="largemodal1"><i class="fe fe-shopping-cart"></i>&nbsp; KERANJANG ANDA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row text-left">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <h5 class="font-weight-bold">Identitas Diri</h5>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ request('name') }}" name="name" placeholder="Nama Anda ...">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Anda ..." value="{{ request('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">No. Telpon <i class="font-weight-normal text-secondary">(Opsional)</i></label>
                                            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Nomor Anda ..." value="{{ request('phone_number') }}">
                                            @error('phone_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <h5 class="font-weight-bold">Permintaan Barang</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table card-table text-nowrap  align-items-center">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="w-75">Barang</th>
                                                        <th class="w-25">Jumlah</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($carts as $cart)
                                                        <tr>
                                                            <td>{{ $cart->item }}</td>
                                                            <td>{{ $cart->item_amount }}</td>
                                                            <td>
                                                                <button class="btn btn-transparent"><i class="fe fe-trash-2 text-danger"></i></button>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="3" class="text-center"><i class="fe fe-slash"></i> Tidak ada data</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            {{ $carts->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        @if ($carts->isEmpty())
                            <button type="button" class="btn btn-primary font-weight-bold btn-block mx-2" disabled>Kirim Permintaan</button>
                        @else
                            <button type="button" class="btn btn-primary font-weight-bold btn-block mx-2">Kirim Permintaan</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: `{{ route('get-items') }}`,
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
            type: 'GET',
            success: function (response) {
                let data = response.item;
                let barang = `<option value="" disabled selected></option>`;
                $.each(data, function (i, item) {
                    barang += `<option value="${item.id}">${item.name}</option>`; //${item.stock}
                });
                $("[name=item]").html(barang);

                $('#item').change(function () {
                    let selectedItem = $(this).val();
                    let selectedStock = data.find(item => item.id == selectedItem).stock;
                    $('#stock').text('stok tersedia: ' + selectedStock);
                });
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        });
    </script>
@endsection
