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
    <div class="m-3">
        <h1 class="mb-2 ms-4">Form Tambah Data Mahasiswa</h1>
        <div class="m-4 bg-dark">
            <form class="p-5" action="/tambah" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputNama1" class="form-label" style="color: white">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputNama1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="nim" class="form-label" style="color: white">NIM</label>
                  <input type="integer" name="nim" class="form-control" id="nim">
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: white">Jenis Kelamin</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki-laki" value="Laki-laki" checked>
                        <label class="form-check-label" for="laki-laki" style="color: white">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan" style="color: white">Perempuan</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label" style="color: white">Program Studi</label>
                    <input type="text" name="prodi" class="form-control" id="prodi">
                  </div>
                <div class="mb-3">
                    <label for="fakultas" class="form-label" style="color: white">Fakultas</label>
                    <input type="text" name="fakultas" class="form-control" id="fakultas">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" href="/home" class="btn btn-danger">Kembali</a>
              </form>
        </div>
    </div>
</body>
</html>
