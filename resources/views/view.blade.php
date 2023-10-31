<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lowongan Kerja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
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
                @endforeach
                
                
                <h2>Daftar Pencari Kerja yang Melamar</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Tahapan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lokers as $loker)
                        @if($loker->tahapan === 'Apply')
                        <tr>
                            <td>{{$loker->nama}}</td>
                            <td>{{$loker->tahapan}}</td>
                            <td>
                                 <a href="/updatepencaker/{{$loker->noktp}}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                <h2>Daftar Pencari Kerja yang Lulus Seleksi Administrasi</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Tahapan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            @foreach($lokers as $loker)
                            @if($loker->tahapan === 'Seleksi Administrasi')
                            <td>{{$loker->nama}}</td>
                            <td>{{$loker->tahapan}}</td>
                            <td>
                                 <a href="/updatepencaker/{{$loker->noktp}}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
                
                <!-- Daftar Pencari Kerja yang Lulus Seleksi Wawancara -->
                <h2>Daftar Pencari Kerja yang Lulus Seleksi Wawancara</h2>
                <table class="table">
                    <thead>

                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Tahapan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lokers as $loker)
                        @if($loker->tahapan === 'Seleksi Wawancara')
                        <tr>
                            <td>{{$loker->nama}}</td>
                            <td>{{$loker->tahapan}}</td>
                            <td>
                                 <a href="/updatepencaker/{{$loker->noktp}}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                
                
                
                
            </main>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
