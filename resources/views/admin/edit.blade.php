@extends('layouts.app')

@section('content')
<style>
    .bn{
        background-color: #0BB833;
        border: #0BB833
    }
    .fn{
        color: #0BB833
    }
</style>
    <div class="container-sm my-5">
        <form action="{{ route('reports.update', ['report' => $report->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <h4 class="fn">Edit Laporan</h4>
                    </div>
                    <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="rDate" class="form-label">Tanggal</label>
                        <input class="form-control @error('rDate') is-invalid @enderror" type="date" name="rDate" id="rDate" value="{{ $errors->any() ? old('rDate') : $report->rdaate }}">
                        @error('rDate')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="rDesc" class="form-label">Deskripsi</label>
                        <input class="form-control @error('rDesc') is-invalid @enderror" type="text" name="rDesc" id="rDesc" value="{{ $errors->any() ? old('rDesc') : $report->rdesc }}" placeholder="Masukkan Deskripsi">
                        @error('rDesc')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="rQty" class="form-label">Jumlah</label>
                        <input class="form-control @error('rQty') is-invalid @enderror" type="text" name="rQty" id="rQty" value="{{ $errors->any() ? old('rQty') : $report->rqty }}" placeholder="Masukkan Jumlah">
                        @error('rQty')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="rPhoto" class="form-label">Foto Bukti</label>
                        <input class="form-control @error('rPhoto') is-invalid @enderror" type="file" name="rPhoto" id="rPhoto" value="{{ $errors->any() ? old('rPhoto') : $report->rphoto }}" placeholder="Masukkan Foto">
                        @error('rPhoto')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('reports.index') }}" class="btn btn-outline-success btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn bn btn-success btn-lg mt-3"><i class="bi-check-circle me-2"></i>Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
