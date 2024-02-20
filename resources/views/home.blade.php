<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container m-5">
        <div class="row">
            <h1 class="col">Data Mahasiswa</h1>
            <a type="button" class="btn btn-outline-dark col m-2" href="/totambah">Tambah</a>
        </div>
        <div class="row">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Fakultas</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $item)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td>{{ $item->fakultas }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>
