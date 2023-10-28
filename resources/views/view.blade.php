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

                <!-- Detail Lowongan Kerja -->
                <div class="card mb-3">
                    <div class="card-body">
                        
                        <h5 class="card-title">Nama: {{$lokers->nama}}</h5>
                        <p class="card-text">Tipe: </p>
                        <p class="card-text">Usia Min: </p>
                        <p class="card-text">Usia Max: </p>
                        <p class="card-text">Gaji Min: </p>
                        <p class="card-text">Gaji Max: </p>
                        <p class="card-text">Nama CP: </p>
                        <p class="card-text">Email CP: </p>
                        <p class="card-text">Nomor Telepon CP: </p>
                        <p class="card-text">Status: </p>

                        <p class="card-text">Status: </p>
                        
                    </div>
                </div>

                <!-- Daftar Pencari Kerja -->
                <h2>Daftar Pencari Kerja yang Melamar</h2>
                <ul class="list-group">
                    <li class="list-group-item">Pencari Kerja A</li>
                    <li class="list-group-item">Pencari Kerja B</li>
                    <!-- Tambahkan nama-nama pencari kerja lainnya -->
                </ul>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
