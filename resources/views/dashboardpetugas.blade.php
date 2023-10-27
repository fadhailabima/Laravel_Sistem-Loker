<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="card mt-5">
    <div class="card-header">Data Buku</div>
    <div class="card-body"> 
        <a href="{{ route('lokers.create')}}"class="btn btn-primary mb-4">Tambah Loker</a>
        
        <br>
        <table class="table table-striped">
            <tr>
              <th>ID Loker</th>
              <th>Nama</th>
              <th>Tipe</th>
              <th>Status</th>
              <th>Action</th>
              
            </tr>
            @foreach($lokers as $loker)
            <tr>
              <td>{{ $loker->idloker }}</td>
              <td>{{ $loker->nama }}</td>
              <td>{{ $loker->tipe }}</td>
              <td>{{ $loker->status }}</td>
              <td>
              <form action="{{ route('lokers.destroy', $loker->idloker) }}" method="POST" class="d-flex justify-content-center">
                @csrf
                @method('delete')
                <a href="{{ route('lokers.edit', $book->idloker) }}" class="btn btn-warning btn-sm" style="margin-right: 1rem;">Edit</a>
                <button class="btn btn-danger btn-sm">Delete</button>
              </form>
              </td>
            </tr>
            @endforeach
      </table>
    </div> 
    </div>
</div>
</body>
</html>