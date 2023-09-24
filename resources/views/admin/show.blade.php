@extends('layouts.app')

@section('content')
<style>
    .bn{
        background-color: #0BB833;
        border: #0BB833;
        color: white;
    }
    .fn{
        color: #0BB833
    }
</style>
    <div class="container-sm py-5">
        <div class="row justify-content-center">
            <div class="p-5 rounded-3 col-md-7 border">
                <div class="mb-3 text-center">
                    <h2 class="fn">Rincian Laporan </h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <img src="{{ asset('storage/images/' . $report->rphoto) }}" class="report-img" alt="report Image" style="width: 100%">
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h4>Tanggal</h4>
                            <h5>{{ $report->rdaate }}</h5>
                        </div>
                        <div class="mb-3">
                            <h4>Deskripsi</h4>
                            <h5>{{ $report->rdesc }}</h5>
                        </div>
                        <div class="mb-3">
                            <h4>Jumlah</h4>
                            <h5>Rp. {{ $report->rqty }}</h5>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('reports.index') }}" class="bn fw-bold btn btn-outline-success btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
