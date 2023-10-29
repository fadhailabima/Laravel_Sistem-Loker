<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Lowongan Kerja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1 class="mt-4">Tambah Lowongan Kerja</h1>
        <form action="add" method="POST">
            @csrf
            <div class="form-group">
                <label for="perusahaan">ID Perusahaan</label>
                <input type="text" class="form-control" id="idperusahaan" name="idperusahaan" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Pekerjaan</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tipe">Tipe Pekerjaan</label>
                <input type="text" class="form-control" id="tipe" name="tipe" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="usia_min">Usia Min</label>
                    <input type="number" class="form-control" id="usia_min" name="usia_min" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="usia_max">Usia Max</label>
                    <input type="number" class="form-control" id="usia_max" name="usia_max" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="gaji_min">Gaji Min</label>
                    <input type="number" class="form-control" id="gaji_min" name="gaji_min" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="gaji_max">Gaji Max</label>
                    <input type="number" class="form-control" id="gaji_max" name="gaji_max" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nama_cp">Nama Contact Person</label>
                <input type="text" class="form-control" id="nama_cp" name="nama_cp" required>
            </div>
            <div class="form-group">
                <label for="email_cp">Email Contact Person</label>
                <input type="email" class="form-control" id="email_cp" name="email_cp" required>
            </div>
            <div class="form-group">
                
                <input type="date" class="form-control" id="tgl_update" name="tgl_update" hidden>
            </div>
            <div class="form-group">
                
                <input type="date" class="form-control" id="tgl_aktif" name="tgl_aktif" hidden>
            </div>
            <div class="form-group">
                <label for="telp_cp">Nomor Telepon Contact Person</label>
                <input type="tel" class="form-control" id="no_telp_cp" name="no_telp_cp" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="aktif">Aktif</option>
                    <option value="tidak aktif">Tidak Aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
