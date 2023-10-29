<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lowongan Kerja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .container, .row {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container h-100">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/dashboardpetugas">
                                Dashboard
                            </a>
                            <a class="nav-link active" href="{{ route('logout') }}">Logout</a>
                        </li>
                        <!-- Tambahkan menu sidebar lainnya di sini jika diperlukan -->
                    </ul>
                </div>
            </nav>
            <div class="col-md-6 offset-md-3 mt-5">
                <h1 class="text-center">Edit Lowongan Kerja</h1>
                <form method="POST" action="/edit/{{ $lokers->idloker }}">
                    @csrf <!-- Tambahkan CSRF Token -->
                    @method('put') <!-- Tambahkan metode PUT -->

                    <div class="form-group">
                        <label for="namaLowongan">Nama Lowongan Kerja</label>
                        <input type="text" class="form-control"  @error('namaLowongan') is-invalid @enderror" id="nama" name="nama" value="{{$lokers->nama}}">
                        @error('namaLowongan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tipeLowongan">Tipe Lowongan Kerja</label>
                        <input type="text" class="form-control" @error('tipeLowongan') is-invalid @enderror" id="tipe" name="tipe" value="{{$lokers->tipe}}">
                        @error('tipeLowongan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="statusLowongan">Status Lowongan Kerja</label>
                        <select class="form-control" id="status" name="status" @error('statusLowongan') is-invalid @enderror" required>
                            <option value="Aktif" {{ $lokers->status == 'aktif' ? 'selected' : '' }}>aktif</option>
                            <option value="ditutup" {{ $lokers->status == 'ditutup' ? 'selected' : '' }}>ditutup</option>
                            <option value="proses seleksi" {{ $lokers->status == 'proses seleksi' ? 'selected' : '' }}>proses seleksi</option>
                        </select>
                        @error('statusLowongan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-md btn-primary">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>