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
            <form action="{{ route('simpan-form')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row justify-content-center ">
                <h1 class="fw-bold text-center mb-5" style="margin-top: 100px">FORM PENDAFTARAN</h1>

                <div class="col-md-5 ms-5 me-5">
                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"
                            aria-label="Nama Lengkap">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="jk" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Laki-Laki
                            </label>
                            
                        </div>
                    </div>

                    <div class="bungkus">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="jk" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Perempuan
                            </label>
                        </div>
                    </div> --}}

                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jk" aria-label="Default select example">
                            <option selected>Jenis Kelamin</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>

                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tgl" placeholder="Tempat Tanggal Lahir"
                            aria-label="Tempat Tanggal Lahir">
                        @error('tgl')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">Agama</label>
                        <select class="form-select" name="agama" aria-label="Default select example">
                            <option selected>Agama</option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Katolik</option>
                            <option value="4">Hindu</option>
                            <option value="5">Budha</option>
                        </select>
                    </div>

                    <div class="bungkus">
                        <label for="inputAddress" class="form-label">Alamat Rumah</label>
                        <input type="text" class="form-control" name="alamat_rmh" id="Alamat Rumah"
                            placeholder="Alamat Rumah">

                        @error('alamat_rmh')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" name="notelp" id="notelp" placeholder="No Telepon">

                        @error('notelp')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="bungkus">
                        <label for="inputAddress" class="form-label">Alamat Sekolah</label>
                        <input type="text" class="form-control" name="alamat_skl" id="Alamat Sekolah"
                            placeholder="Alamat Sekolah">

                        @error('alamat_skl')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">

                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">No Telp/Fax Sekolah</label>
                        <input type="text" class="form-control" name="nofax" id="nofax"
                            placeholder="No Telp/Fax Sekolah">

                        @error('nofax')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="bungkus">

                        <label for="exampleFormControlInput1" class="form-label">Program/Jurusan</label>
                        <select name="jurusan" class="form-select form-control" id="">
                            <option selected>Program/Jurusan</option>
                            <option value="1">Teknik Komputer Jaringan</option>
                            <option value="2">Rekayasa Perangkat Lunak</option>
                            <option value="3">Multimedia</option>
                            <option value="4">Animasi</option>
                            <option value="5">OTKP</option>
                            <option value="6">BDP</option>
                        </select>
                    </div>

                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">NIS</label>
                        <input type="text" class="form-control" name="nis" placeholder="NIS" aria-label="NIS">
                    </div>

                    <div class="bungkus">
                        <label for="exampleFormControlInput1" class="form-label">Periode PKL</label>
                        <select class="form-select" name="periode" aria-label="Default select example">
                            <option selected>Priode PKL</option>
                            <option value="1">4 April 2023 - 4 Juli 2023 (Batch 12)</option>
                            <option value="2">2 Mei 2023 - 1 Agustus 2023 (Batch 13)</option>
                            <option value="3">1 Agustus 2023 - 1 Febuari 2024 (Batch 14)</option>
                        </select>
                    </div>

                    <div class="bungkus">
                        <label for="formFile" class="form-label">PAS Foto</label>
                        <input class="form-control" name="foto" type="file" id="foto">

                        @error('foto')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="bungkus">
                        <label for="formFile" class="form-label">KTP/Kartu Pelajar</label>
                        <input class="form-control" type="file" name="kartu" id="kartu">

                        @error('kartu')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="bungkus">
                        <label for="formFile" class="form-label">CV/Portofolio</label>
                        <input class="form-control" type="file" name="cv" id="cv">

                        @error('cv')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="bungkus">
                        <label for="formFile" class="form-label">Surat pengantar Sekolah</label>
                        <input class="form-control" type="file" name="surat" id="surat">

                        @error('surat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>