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
                <form>
                    <div class="form-group">
                        <label for="namaPencariKerja">Nama Pencari Kerja</label>
                        <input type="text" class="form-control" id="namaPencariKerja" value="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="emailPencariKerja">Email Pencari Kerja</label>
                        <input type="email" class="form-control" id="emailPencariKerja" value="john@example.com">
                    </div>
                    <div class="form-group">
                        <label for="teleponPencariKerja">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="teleponPencariKerja" value="123456789">
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
