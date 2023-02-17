<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">

    <title>Document</title>

    <style>
        .bungkus {
            padding-bottom: 1rem;
        }
    </style>
</head>

<body>

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #C1EFFF">
    <div class="container">
        <img src="img/about.png" alt="">
        <a class="navbar-brand" href="#">Winata Cyber Net</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="padding-right: 70px">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jurusan">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ketentuan">Ketentuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- Akhir Navbar --}}

    <div class="container-form">
        <h1 class="fw-bold text-center mb-5" style="margin-top: 100px">FORM PENDAFTARAN</h1>
        <div class="row justify-content-center">
            {{-- <div class="card">
                <div class="card-body"> --}}
            {{-- <form action="{{ route('')}}" method="POST" enctype="multipart/form-data">
            @csrf --}}
            <div class="col-md-5 ms-5 me-5">
                <div class="bungkus">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>

                <div class="bungkus">
                    <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap">
                </div>

                <div class="bungkus">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                        </label>
                    </div>
                </div>

                <div class="bungkus">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                        </label>
                    </div>
                </div>


                <div class="bungkus">
                    <label for="exampleFormControlInput1" class="form-label">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" placeholder="Tempat Tanggal Lahir"
                        aria-label="Tempat Tanggal Lahir">
                </div>


                <div class="bungkus">
                    <label for="exampleFormControlInput1" class="form-label">Agama</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Agama</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen</option>
                        <option value="3">Katolik</option>
                        <option value="3">Hindu</option>
                        <option value="3">Budha</option>
                    </select>
                </div>

                <div class="bungkus">
                    <label for="inputAddress" class="form-label">Alamat Rumah</label>
                    <input type="text" class="form-control" id="Alamat Rumah" placeholder="Alamat Rumah">

                </div>

                <div class="bungkus">
                    <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" placeholder="No Telepon">
                </div>


                <div class="bungkus">
                    <label for="inputAddress" class="form-label">Alamat Sekolah</label>
                    <input type="text" class="form-control" id="Alamat Sekolah" placeholder="Alamat Sekolah">
                </div>
            </div>
                <div class="col-md-5">

                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">No Telp/Fax Sekolah</label>
                        <input type="text" class="form-control" id="no_fax" placeholder="No Telp/Fax Sekolah">
                    </div>
                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">Program/Jurusan</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Program/Jurusan</option>
                            <option value="1">Teknik Komputer Jaringan</option>
                            <option value="2">Rekayasa Perangkat Lunak</option>
                            <option value="3">Multimedia</option>
                            <option value="3">Animasi</option>
                            <option value="3">OTKP</option>
                            <option value="3">BDP</option>
                        </select>
                    </div>
                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">NIS</label>
                        <input type="text" class="form-control" placeholder="NIS" aria-label="NIS">
                    </div>
                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">Periode PKL</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Priode PKL</option>
                            <option value="1">Teknik Komputer Jaringan</option>
                            <option value="2">Rekayasa Perangkat Lunak</option>
                            <option value="3">Multimedia</option>
                            <option value="3">Animasi</option>
                            <option value="3">OTKP</option>
                            <option value="3">BDP</option>
                        </select>
                    </div>
                    <div class="bungkus">
                        <label for="formFile" class="form-label">PAS Foto</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="bungkus">
                        <label for="formFile" class="form-label">KTP/Kartu Pelajar</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="bungkus">
                        <label for="formFile" class="form-label">CV/Portofolio</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="bungkus">
                        <label for="formFile" class="form-label">Surat pengantar Sekolah</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                </div>
            </div>
        </div>






        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>