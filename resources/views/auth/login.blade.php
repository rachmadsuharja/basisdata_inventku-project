@extends('auth.layouts.main')

@section('container')
    <!-- page-content -->
    <div class="page-content">
        <div class="container text-center text-dark">
            <div class="row">
                <div class="col-lg-4 d-block mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12">
                            <div class="card">
                                <form action="{{ route('postlogin') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="text-center mb-6">
                                            <h2 class="fw-bold mt-3" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 1.6rem">Invent<span class="text-primary">Ku</span></h2>
                                        </div>
                                        <p class="text-muted">Masuk ke akun Anda!</p>
                                        <div class="input-group my-3">
                                            <span class="input-group-addon bg-white" style="width: 2.5rem"><i class="fa fa-envelope"></i></span>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                                        </div>
                                        @error('email')
                                            <div class="d-flex justify-content-start w-100">
                                                <small class="text-danger">{{ $message }}</small>
                                            </div>
                                        @enderror
                                        <div class="input-group my-3">
                                            <span class="input-group-addon bg-white" style="width: 2.5rem"><i class="fa fa-unlock-alt"></i></span>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                        </div>
                                        @error('password')
                                            <div class="d-flex justify-content-start w-100">
                                                <small class="text-danger">{{ $message }}</small>
                                            </div>
                                        @enderror
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <a href="#" class="btn btn-link box-shadow-0 px-0">Lupa kata sandi?</a>
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
    <!-- page-content end -->
@endsection
