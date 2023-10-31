<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pencari Kerja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
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
           
            <div class="col-md-6 mt-5">
                <h1 class="text-center">Edit Pencari Kerja</h1>
                @foreach($pencakers as $pencaker)
                <form method="POST" action="/updatepencaker/{{ $pencaker->noktp }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama">Nama Pencari Kerja</label>
                        <input type="text" class="form-control" id="nama" value="{{$pencaker->nama}}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="tahapan">Tahapan Pencari Kerja</label>
                        <select class="form-control" id="tahapan" name="tahapan">
                            <option value="2" >Seleksi Wawancara</option>
                                <option value="1" >Seleksi Administrasi</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    @endforeach
                </form>
            </div>
           
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
