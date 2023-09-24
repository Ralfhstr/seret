
    {{-- <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <img src="{{ Vite::asset('resources/images/Logo.png') }}" alt="" style="width: 10%;">

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 text-right"><a href="" class="nav-link active">Dashboard</a></li>
                    <li class="nav-item col-2 text-right"><a href="{{ route('transactions.index') }}" class="nav-link">Transaksi</a></li>
                    <li class="nav-item col-2 text-right"><a href="{{ route('reports.index') }}" class="nav-link">Laporan</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav> --}}

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container mt-4 col-10">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h1 class="p-3 text-center" style="color: #1AA2CA; margin-left:20%">{{ $pageTitle }}</h1>
                </div>
            </div>
            <div class="table-responsive border p-3 rounded-3 table-container">
                <table class="table table-bordered table-hover table-striped mb-0 bg-light" id="transactionTable">
                    <thead style="background-color: #1AA2CA; color:white ">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Kontak</th>
                            <th>Produk</th>
                            <th>Alamat</th>
                            <th>Jumlah</th>
                            <th>Price</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $index => $transaction)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $transaction->uname }}</td>
                                <td>{{ $transaction->user->phone }}</td>
                                <td>{{ $transaction->product->pname }}</td>
                                <td>{{ $transaction->address }}</td>
                                <td>{{ $transaction->tqty }}</td>
                                <td>{{ $transaction->product->pprice * $transaction->tqty }}</td>
                                <td>{{ $transaction->payment->pyname }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="module">
        $("#transactionTable").DataTable({});
    </script>
@endpush
