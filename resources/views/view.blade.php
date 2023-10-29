<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lowongan Kerja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <!-- Tambahkan menu sidebar lainnya di sini jika diperlukan -->
                    </ul>
                </div>
            </nav>

            <!-- Konten -->
            <main class="col-md-9">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Detail Lowongan Kerja</h1>
                </div>
                @foreach($lokers as $loker)
                <!-- Detail Lowongan Kerja -->
                <div class="card mb-3">
                    <div class="card-body">
                        
                        <h5 class="card-title">Nama: {{$loker->nama_pekerjaan}}</h5>
                        <p class="card-text">Tipe:  {{$loker->tipe}}</p>
                        <p class="card-text">Usia Min: {{$loker->usia_min}}</p>
                        <p class="card-text">Usia Max: {{$loker->usia_max}}</p>
                        <p class="card-text">Gaji Min: {{$loker->gaji_min}}</p>
                        <p class="card-text">Gaji Max: {{$loker->gaji_max}}</p>
                        <p class="card-text">Nama CP: {{$loker->nama_cp}}</p>
                        <p class="card-text">Email CP: {{$loker->email_cp}}</p>
                        <p class="card-text">Nomor Telepon CP: {{$loker->no_telp_cp}}</p>
                        <p class="card-text">Status: {{$loker->status}}</p>
                        
                    </div>
                </div>

                <!-- Daftar Pencari Kerja -->
                <h2>Daftar Pencari Kerja yang Melamar</h2>
                <ul class="list-group">
                    <li class="list-group-item">{{$loker->nama}} Tahapan : {{$loker->tahapan}}</li>
                    
                    
                    <!-- Tambahkan nama-nama pencari kerja lainnya -->
                </ul>
                @endforeach
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
