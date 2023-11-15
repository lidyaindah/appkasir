@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0  text-white">Dashboard</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
        <!-- card -->
        <div class="card ">
            <!-- card body -->
            <div class="card-body">
                <!-- heading -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h4 class="mb-0">Total Produk</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                        <i data-feather="box"></i>
                    </div>
                </div>
                <!-- project number -->
                <div>
                    <h1 class="fw-bold">{{ $total_produk }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
        <!-- card -->
        <div class="card ">
            <!-- card body -->
            <div class="card-body">
                <!-- heading -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h4 class="mb-0">Total Pembeli</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                        <i  data-feather="users"></i>
                    </div>
                </div>
                <!-- project number -->
                <div>
                    <h1 class="fw-bold">{{ $total_pembeli }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
        <!-- card -->
        <div class="card ">
            <!-- card body -->
            <div class="card-body">
                <!-- heading -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h4 class="mb-0">Total Pengguna</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                        <i  data-feather="users"></i>
                    </div>
                </div>
                <!-- project number -->
                <div>
                    <h1 class="fw-bold">{{ $total_pengguna }}</h1>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
        <!-- card -->
        <div class="card ">
            <!-- card body -->
            <div class="card-body">
                <!-- heading -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h4 class="mb-0">Total Transaksi</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                        <i  data-feather="file"></i>
                    </div>
                </div>
                <!-- project number -->
                <div>
                    <h1 class="fw-bold">{{ $total_transaksi }}</h1>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection