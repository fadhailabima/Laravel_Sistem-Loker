<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Lowongan Kerja</title>
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
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <!-- Tambahkan menu sidebar lainnya di sini jika diperlukan -->
                    </ul>
                </div>
            </nav>

            <!-- Konten -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard Lowongan Kerja</h1>
                    <!-- Form Pencarian -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Nama Lowongan Kerja" id="searchInput">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="filterStatus">Status</label>
                        </div>
                        <select class="custom-select" id="filterStatus">
                            <option value="" selected>Semua</option>
                            <option value="aktif">Aktif</option>
                            <option value="tidakaktif">Tidak Aktif</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="searchButton">Cari</button>
                        </div>
                    </div>
                    <a href="add" class="btn btn-primary">Tambah Loker</a>
                </div>

                <!-- Tabel Lowongan Kerja -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Lowongan Kerja</th>
                                <th>Tipe Lowongan Kerja</th>
                                <th>Status Lowongan Kerja</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Isi tabel dengan data lowongan kerja -->
                            @foreach($lokers as $loker)
                            <tr>
                                <td>{{ $loker->nama }}</td>
                                <td>{{ $loker->tipe}}</td>
                                <td>{{ $loker->status}}</td>
                                <td>
                                    <a href="/detail/{{$loker->idloker}}" class="btn">View</a>
                                    <a href="/edit/{{$loker->idloker}}" class="btn btn-primary">Edit</a>
                                    <a class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Tambahkan baris lain sesuai dengan jumlah lowongan kerja -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script Pencarian -->
    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById('searchInput');
            filter = input.value.toUpperCase();
            table = document.querySelector('.table');
            tr = table.getElementsByTagName('tr');
            var statusFilter = document.getElementById('filterStatus').value;

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName('td')[0]; // Kolom Nama Lowongan Kerja
                var statusTd = tr[i].getElementsByTagName('td')[2]; // Kolom Status Lowongan Kerja
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    var statusTxtValue = statusTd.textContent || statusTd.innerText;
                    if ((txtValue.toUpperCase().indexOf(filter) > -1) && (statusFilter === "" || statusTxtValue === statusFilter)) {
                        tr[i].style.display = '';
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        });
    </script>
</body>

</html>
