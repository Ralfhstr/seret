<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('reports.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
