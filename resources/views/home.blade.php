<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tambah Data</title>
    <style>
        .card {
            background-color: grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <form action="{{ route('tambahData.mahasiswa') }}" method="post" class="mx-auto w-75">
                @csrf
                <div class="row mt-5">
                    <div class="col">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" placeholder="Nama" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="nim">Nim</label>
                        <input type="number" placeholder="Nim" name="nim" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="alamat">Alamat</label>
                        <input type="text" placeholder="Alamat" name="alamat" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="date" placeholder="Tanggal Masuk" name="tanggal_masuk" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2 mb-5 w-25"><i
                    class="fa fa-shopping-cart"></i>Pesan</button>
                </form>
        </div>
        <table class="table table-striped">
            <tbody>
                <tr>
                   <th>No</th>
                   <th>Nama Mahasiswa</th>
                   <th>Nim</th>
                   <th>Alamat</th>
                   <th>Tanggal Masuk</th>
                </tr>
            </tbody>

            @php
                $no = 1;
            @endphp

            @foreach ( $mahasiswa as $data )
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_mahasiswa }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->tanggal_masuk }}</td>
            </tr>

            @endforeach
          </table>

    </div>




    @include('sweetalert::alert')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
