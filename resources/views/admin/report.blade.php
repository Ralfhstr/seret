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
    <div class="row">
        <div class="container mt-4 col-10">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h1 class="p-3 text-center" style="color: #1AA2CA; margin-left:20%;">{{ $pageTitle }}</h1>
                </div>
                <div class="col-lg-3 col-xl-2 nav-link" data-bs-toggle="modal" data-bs-target="#Modal" style="margin-top: 2%">
                    <h3 class="btn bn btn-success"><i class="bi bi-plus-circle me-1"></i>Tambah Laporan</h3>
                </div>
            </div>
            <div class="table-responsive border p-3 rounded-3 table-container">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white" id="reportTable">
                    <thead style="background-color: #1AA2CA; color:white">
                        <tr>
                            <th style="width: 5%">No.</th>
                            <th style="width: 20%">Tanggal</th>
                            <th style="width: 20%">Deskripsi</th>
                            <th style="width: 20%">Jumlah</th>
                            <th style="width: 20%">Foto Bukti</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $index => $report)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $report->rdaate }}</td>
                                <td>{{ $report->rdesc }}</td>
                                <td>Rp. {{ $report->rqty }}</td>
                                <td>
                                <img src="{{ asset('storage/images/' . $report->rphoto) }}" width="10%">
                                <td>
                                <div class="d-flex">
                                    <a href="{{ route('reports.show', ['report' => $report->id]) }}" class="fw-bold btn btn-outline-success btn-sm me-2"><i class="bi bi-eye"></i></a>
                                    <a href="{{ route('reports.edit', ['report' => $report->id]) }}" class="btn btn-outline-success btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fn" id="ModalLabel">Tambah Laporan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-sm">
                        <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="rDate" class="form-label">Tanggal</label>
                                        <input class="form-control @error('rDate') is-invalid @enderror" type="date" name="rDate" id="rDate" value="{{ old('rDate') }}">
                                        @error('rDate')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="rDesc" class="form-label">Deskripsi</label>
                                        <input class="form-control @error('rDesc') is-invalid @enderror" type="text" name="rDesc" id="rDesc" value="{{ old('rDesc') }}" placeholder="Masukkan Deskripsi">
                                        @error('rDesc')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="rQty" class="form-label">Jumlah</label>
                                        <input class="form-control @error('rQty') is-invalid @enderror" type="text" name="rQty" id="rQty" value="{{ old('rQty') }}" placeholder="Masukkan Jumlah">
                                        @error('rQty')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="rPhoto" class="form-label">Foto Bukti</label>
                                        <input class="form-control @error('rPhoto') is-invalid @enderror" type="file" name="rPhoto" id="rPhoto" value="{{ old('rPhoto') }}" placeholder="Masukkan Foto">
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
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="module">
    $(document).ready(function() {
        $("#reportTable").DataTable({});
    });
</script>

@endpush

