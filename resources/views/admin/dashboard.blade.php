@extends('layouts.app')

@section('content')
<style>
    .card-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card {
        width: 18rem;
        float: left;
        margin-right: 20px;
        background-color: #1AA2CA;
        color: white;
    }
</style>
    <div class="container mt-5">
        <img src="{{ asset('storage/images/dash.png') }}" alt="" style="width: 100%"/>
        <div class="card-container my-5">
            <div class="card">
                <div class="card-body">
                <h3 class="card-title">Total Transaksi</h3>
                <h4 class="card-subtitle mb-2 text-body-light">Rp. 675.000</h4>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h3 class="card-title">Pengeluaran</h3>
                <h4 class="card-subtitle mb-2 text-body-light">Rp. 450.000</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
