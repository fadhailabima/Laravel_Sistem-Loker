<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pencari Kerja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h1 class="text-center">Edit Pencari Kerja</h1>
                <form method="POST" action="/edit/{{ $pencakers->noktp }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama">Nama Pencari Kerja</label>
                        <input type="text" class="form-control" id="nama" value="{{$pencakers->nama}}">
                    </div>

                     <div class="form-group">
                        <label for="tahapan">Tahapan Pencari Kerja</label>
                        <select class="form-control" id="tahapan">
                            <option value="seleksiAdministrasi">Seleksi Administrasi</option>
                            <option value="seleksiWawancara" selected>Seleksi Wawancara</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
