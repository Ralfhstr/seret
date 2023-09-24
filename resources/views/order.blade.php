@extends('layouts.paa')

@section('content')
<style>
    .bn{
        background-color: #0BB833;
        border: #0BB833;
    }
    .fn{
        color: #0BB833;
    }
    .input{
        border: 2px solid #0BB833;
    }
</style>
    <div class="container-sm my-5">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="fn mb-3 text-center">
                        <h4>PESANAN TUYOGAS 3KG</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="Name" class="fn form-label">Nama Lengkap</label>
                            <input class="form-control @error('Name') is-invalid @enderror" type="text" name="Name" id="Name" value="{{ old('Name') }}" placeholder="Masukkan Nama Lengkap">
                            @error('Name')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Address" class="fn form-label">Alamat</label>
                            <input class="form-control @error('Address') is-invalid @enderror" type="text" name="Address" id="Address" value="{{ old('Address') }}" placeholder="Masukkan Alamat">
                            @error('Address')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Qty" class="fn form-label">Jumlah</label>
                            <input class="form-control @error('Qty') is-invalid @enderror" type="text" name="Qty" id="Qty" value="{{ old('Qty') }}" placeholder="Masukkan Jumlah Pesanan">
                            @error('Qty')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Payment" class="fn form-label">Pembayaran</label>
                            <select name="Payment" id="Payment" class="form-select">
                                @foreach ($payments as $payment)
                                    <option value="{{ $payment->id }}" {{ old('Payment') == $payment->id ? 'selected' : '' }}>{{$payment->pyname }}</option>
                                @endforeach
                            </select>
                            @error('Payment')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="hidden"  class="form-control @error('User') is-invalid @enderror" type="text" name="User" id="User" value="2">
                            @error('User')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="hidden"  class="form-control @error('Product') is-invalid @enderror" type="text" name="Product" id="Product" value="1" placeholder="Enter Product">
                            @error('Product')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('products.index') }}" class="btn btn-outline-success btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn bn btn-success btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
