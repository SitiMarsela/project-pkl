<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <!-- 1. owl carousel min css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 2. owl caraousel theme min css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="./style.css">
    <title>Tempat PKL</title>
</head>

<style>
    .header {
        height: 100vh;
        /* width: 100vw; */
        background-size: cover;
        background-image: url(img/header1.jpg);
        box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5);
        background-attachment: fixed;
    }

    .header_content2 {
        padding-top: 1rem;
        /* background-image: url(); */
    }

    .header .text1{
        font-family: 'Dancing Script', cursive;
    }
</style>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
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
                        <a class="nav-link active" aria-current="page" href="header">Home</a>
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


    {{-- header --}}
    <div class="header w-100">
        <div class="container w-100">
            <div class="header_content2 justify-content-center mt-5">
                <div class="hc_1 mb-2 mt-5">
                    <p class="text-white text-center mt-5" style="font-weight:700;font-size:64px">Prakerin Winata Cyber
                        Net</p>
                    <p class="text1 text-white text-center" style="font-size: 20px;">Perusahaan yang lebih fokus ke pemasaran
                        online & berhubungan dengan dunia digital marketing</p>
                </div>
                <div class="hc_2 d-flex justify-content-center">
                    <a href="/formpendaftaran"><button type="button" class="fa-regular fa-id-badge">DAFTAR
                            SEKARANG</button></a>

                </div>
            </div>
        </div>
    </div>
    {{-- akhir header --}}

    {{-- about us --}}

    {{-- <div class="container1">
        <div class="about-us">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/about.png" alt="" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <h3></h3>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container1 w-100">
        <div class="container1-1">
            <div class="about-us">
                <div class="row">
                    <div class="col-md-6 mt-5 text-center">
                        <img src="{{asset('img/about.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6 mt-5">
                        <h4 style="font-weight: 700;
                            font-size: 32px; padding-top:40px;">About Us</h4>
                        <h4 class="pb-4 fw-bold">Prakerin Winata Cyber Net</h4>
                        <p class="pe-5">Winata Cyber Net merupakan perusahaan yang lebih fokus ke pemasaran online dan
                            berhubungan dengan teknologi informasi atau dunia digital marketing. Seperti Dunia Usaha
                            Dunia
                            Industri yang lainnya, Winata Cyber Net juga menerima siswa PRAKERIN. Seperti yang sudah
                            diketahui, bahwa kami membuka Lowongan PKL di Cibubur dan sekitarnya.
                            <br>
                            <br>
                            Winata Cyber Net saat ini kami masih menerapkan sistem PRAKERIN seperti pada umumnya, dimana
                            siswa datang ke kantor dan bekerja sesuai bagiannya. Winata Cyber Net akan mulai
                            mengembangkan
                            sistem PRAKERIN online. Sehingga bisa memberikan kesempatan yang lebih luas bagi siswa siswi
                            SMK/Umum yang berdomisili di luar daerah Cibubur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- akhir about us --}}

        {{-- Jurusan --}}
        <div class="container2">
            <div class="jurusan">
                <h1 class="text-center fw-bold display-1 mb-3 pt-5">JURUSAN</h1>
                <div class="row mt-5 me-5 ms-5">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="img/bdp.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center mt-4">Bisnis Daring Pemasaran</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="img/multi.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center mt-4">Multimedia</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="img/design.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center mt-4">Design Grafis</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="img/animasi.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center mt-4">Animasi</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="img/rpl.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center mt-4">Rekayasa Perangkat Lunak</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="img/tkj.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center mt-4">Teknik Komputer dan Jaringan</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-4">
                            <div class="card border-0 shadow">
                                <img src="img/otkp.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center mt-4">Otomatisasi dan Tatakelola Perkantoran</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- akhir jurusan --}}

        {{-- Ketentuan --}}

        <div class="container3">
            <div class="ketentuan">
                <div class="row">
                    <div class="col-md-6">
                        <div class="sticky-md-top text-center pt-5 pb-5">
                            <h1 class="fw-bold text-center mt-5 pt-5">Ketentuan PKL</h1>
                            <img src="img/about.png" alt="" style="width: 250px; height:250px">
                            <p class="text-center pt-4 pe-4 ps-4">Selama melaksanakan PKL di Winata Cyber Net, peserta
                                akan dibimbing dan disesuaikan dengan jurusan/keahlian masing-masing.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="sticky-content mt-5 pe-5">
                            <div class="btn btn-outline-warning mb-3 tblack p-3">
                                <h5>Calon Peserta PKL harus memenuhi seluruh persyaratan pendaftaran</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Mengikuti Psikotest dan Interview sesuai jadwal yang ditentukan</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Calon peserta PKL wajib mengikuti tes kemampuan dasar & keahliannya sesuai jurusan
                                    masing-masing</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Bisa mengoperasionalkan MS Office (MS Word, MS Excel dan MS Power Point) </h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Membawa Smartphone & Laptop (Smartphone + OTG + keyboard wireless + mouse wireless +
                                    tripod mini)</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Membawa kartu perdana yang sudah ter-registrasi (AON 3) dengan masa aktif 1 tahun
                                    dan siap pakai.</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Peserta PKL tidak mendapat Gaji – Uang Transortasi – Uang Makan</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Peserta PKL akan mendapatkan Beasiswa senilai Rp 500.000,- /bulan jika Sekolah &
                                    Perusahaan sudah ada MoU</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Peserta PKL yang dari pihak Sekolah-nya belum ada MoU dengan Perusahaan akan
                                    menerima Voucher Beasiswa Senilai Rp 400.000,- & selebihnya di bebankan ke peserta
                                    PKL /bulan nya</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Peserta PKL tidak mendapat penginapan, bagi yang tinggal di luar kota</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3 w-100">
                                <h5>Durasi PKL minimal selama 6 Bulan atau 1 Tahun
                                    </h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3 w-100">
                                <h5>Jam Kerja mulai 08:00 – 16:00</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Peserta PKL wajib mengikuti pembekalan selama 2 minggu (100% kehadiran) sebagai
                                    syarat kelulusan</h3>
                            </div>

                            <div class="btn btn-outline-warning mb-3 text-black p-3">
                                <h5>Seluruh peserta PKL wajib mengikuti dan mentaati peraturan perusahaan</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tata Tertib --}}

        <div class="container4">
            <div class="tertib w-100">
                <h3 class="text-center fw-bold pt-4" style="font-size: 4rem">TATA TERTIB</h3>
                {{-- <div class="garis mb-5"></div> --}}

                <div class="row justify-content-center mt-4 ps-5 gx-5">
                    <div class="col-md-6 d-flex pb-4 ps-5">
                        <img src="img/tata1.jpg" alt="" style="border-radius: 400px; width:100px; height:100px">
                        <div class="bungkus ps-4 pt-1 pe-5">
                            <h4 class="fw-bold">Perilaku</h4>
                            <p class="fw-light font12">Harus jujur, bertanggung jawab, berlaku sopan, disiplin, dan
                                mampu mematuhi semua tata tertib selama pelaksanaan PKL
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex pb-4">
                        <img src="img/tata3.jpg" alt="" style="border-radius: 500px; width:100px; height:95px">
                        <div class="bungkus ps-4 pt-1 pe-5">
                            <h4 class="fw-bold">Izin</h4>
                            <p class="fw-light font12">Peserta PKL yang Sakit Wajib membawa surat Dokter
                            </p>
                        </div>
                    </div>

                    <!-- Force next columns to break to new line at md breakpoint and up -->
                    <div class="w-100 d-none d-md-block"></div>

                    <div class="col-md-6 d-flex ps-5">
                        <img src="img/tata2.jpg" alt="" style="border-radius: 400px; width:100px; height:100px">
                        <div class="bungkus ps-4 pt-1 pe-5">
                            <h4 class="fw-bold">Kehadiran</h4>
                            <p class="fw-light font12">Peserta PKL harus hadir minimun 15 menit sebelum waktu PKL
                                dimulai. Waktu PKL berlangsung dari pukul 08:00 sampai pukul 16:00 dengan waktu
                                istirahat 1 jam.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex pb-4">
                        <img src="img/tata4.jpg" alt="" style="border-radius: 400px; width:100px; height:100px">
                        <div class="bungkus ps-4 pt-1 pe-5">
                            <h4 class="fw-bold">Produktifitas</h4>
                            <p class="fw-light font12">Peserta PKL mampu mengikuti standar kualifikasi yang ditentukan
                                selama mengikuti PKL.
                            </p>
                        </div>
                    </div>
                    <!-- Force next columns to break to new line at md breakpoint and up -->
                    <div class="w-100 d-none d-md-block"></div>

                    <div class="col-md-6 d-flex ps-5 pe-5">
                        <img src="img/tata5.jpg" alt="" style="border-radius: 400px; width:100px; height:100px">
                        <div class="bungkus ps-4 pt-1 pe-5">
                            <h4 class="fw-bold">Pakaian</h4>
                            <p class="fw-light font12">Pada saat Pembekalan diwajibkan memakai baju seragam sekolah.
                            </p>
                            <p class="pt-1">
                                Pada saat Pelaksanaan PKL, mengenakan pakaian yang sopan dan rapi. Khusus Hari
                                Kamis wajib menggunakan Baju Seragam Praktek.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <img src="img/tata6.jpg" alt="" style="border-radius: 400px; width:100px; height:100px">
                        <div class="bungkus ps-4 pt-1 pe-5">
                            <h4 class="fw-bold">Sanksi</h4>
                            <p class="fw-light font12">Peringatan lisan atau tidak diperbolehkan masuk praktek / PKL
                            </p>
                            <p class="pt-1">Peringatan Tertulis dengan tembusan ke Sekolah yang bersangkutan</p>
                            <p>Surat pengembalian peserta ke asal sekolah dan tanpa diberikan sertifikat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Akhir Tata Tertib --}}

        {{-- Materi --}}

        <div class="container5">
            <div class="materi text-center">
                <h3 class="text-center fw-bold pt-4" style="font-size: 4rem">MATERI</h3>
                <div class="garis mb-5"></div>

                <div class="row justify-content-center mt-5 me-5 ms-5 mb-5">
                    <div class="col-md-3">
                        <img src="img/materi1.png" alt="" style=" width:130px; height:100px" class="mt-2">
                        <h4 class="pt-4 fw-bold">Pondasi Internet Marketing</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="img/materi2.png" alt="" style=" width:130px; height:100px" class="mt-2">
                        <h4 class="pt-4 fw-bold">Riset Online</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="img/materi3.png" alt="" style=" width:130px; height:100px" class="mt-2">
                        <h4 class="pt-4 fw-bold">Content Creator</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="img/materi7.png" alt="" style=" width:130px; height:100px" class="mt-2">
                        <h4 class="pt-4 fw-bold">Video Marketing</h4>
                    </div>

                    <!-- Force next columns to break to new line at md breakpoint and up -->
                    <div class="w-100 d-none d-md-block" style="padding-top: 5.5rem"></div>

                    <div class="col-md-3">
                        <img src="img/materi4.png" alt="" style=" width:130px; height:100px" class="mt-2">
                        <h4 class="pt-4 fw-bold">Dokumen Marketing</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="img/materi5.png" alt="" style=" width:130px; height:100px" class="mt-2">
                        <h4 class="pt-4 fw-bold">Facebook Marketing</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="img/materi6.png" alt="" style=" width:130px; height:100px" class="mt-2">
                        <h4 class="pt-4 fw-bold">Blog Marketing</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="img/materi8.png" alt="" style=" width:130px; height:100px" class="mt-2">
                        <h4 class="pt-4 fw-bold">Website Developer</h4>
                    </div>
                </div>
            </div>
            {{-- Akhir Materi --}}
        </div>

        {{-- Pembimbing --}}
        <div class="container6">
            <div class="pembimbing">
                <h1 class="text-center fw-bold display-1 mb-3 pt-5">Pembimbing</h1>
                <div class="row mt-5 pb-5 justify-content-center">
                    <div class="col-md-2">
                        <div class="item1">
                            <div class="card">
                                <img src="img/bunur.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center fw-bold mt-4">Nursjamsiah,Ir</h5>
                                    <p class="text-center" style="background-color: #FFC93C">CEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="item1">
                            <div class="card">
                                <img src="img/pakfadli.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center fw-bold mt-4">Fadli Jihad</h5>
                                    <p class="text-center" style="background-color: #FFC93C">HRD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="item1">
                            <div class="card">
                                <img src="img/pakapri.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center fw-bold mt-4">Aprianto</h5>
                                    <p class="text-center" style="background-color: #FFC93C">Pembimbing</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="item1">
                            <div class="card">
                                <img src="img/pakrian.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="text-center fw-bold mt-4">Rian M</h5>
                                    <p class="text-center" style="background-color: #FFC93C">Pembimbing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Akhir Pembimbing --}}


        {{-- Gallery --}}

        <!-- Swiper -->
        <div class="container7 mb-5">
            <div class="swiper mySwiper w-60 pb-5" id="gallery">
                <h1 class="text-center fw-bold mt-5" style="font-size: 4rem">GALLERY</h1>
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="img/bacth1.jpeg"></div>
                    <div class="swiper-slide"><img src="img/bacth2.jpeg"></div>
                    <div class="swiper-slide"><img src="img/bacth3.jpeg"></div>
                    <div class="swiper-slide"><img src="img/bacth4.jpeg"></div>
                    <div class="swiper-slide"><img src="img/bacth5.jpeg"></div>
                    <div class="swiper-slide"><img src="img/bacth6.jpeg"></div>
                    <div class="swiper-slide"><img src="img/bacth7.jpeg"></div>
                    <div class="swiper-slide"><img src="img/bacth8.jpeg"></div>
                    <div class="swiper-slide"><img src="img/bacth9.jpeg"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Swiper End -->

 <!-- lokasi -->

 <div class="lokasi">
    <div class="container">
        <div class="left">
            <h2>Prakerin Winata Cyber Net</h2>
            <p>Jl. Raya Kota Wisata, Boston RK-2 No.</p>
            <p>Tiga Delapan(38), Ciangsana, Kec. Gn. Putri, Kabupaten Bogor, <br>
            Jawa Barat 16968</p>

            <div class="sosmed">
                <div class="icon" id="fb">
                    <i class="fa-brands fa-facebook fa-xl"></i>
                </div>

                <div class="icon" id="yt">
                    <i class="fa-brands fa-youtube fa-xl"></i>
                </div>

                <div class="icon" id="ig">
                    <i class="fa-brands fa-instagram fa-xl"></i>
                </div>

                <div class="icon" id="wa">
                    <i class="fa-brands fa-whatsapp fa-xl"></i>
                </div>
            </div>
        </div>
        <div class="right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.318919991269!2d106.9639162!3d-6.352742899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69936c48a20ee3%3A0xe323e1814be90896!2sTempat%20PKL%20Terbaik%20di%20Cibubur!5e0!3m2!1sen!2sid!4v1677063395806!5m2!1sen!2sid" width="100%" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<!-- footer -->



    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- include cdn files -->

    <!-- 0. jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- 1. owl carousel min .js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

        });
    </script>


    <script>
        let naik = document.querySelector(".naik");
        let home = document.querySelector(".home");

        let homeoption = {
            rootMargin: "-200px 0px 0px 0px"
        };

        let homeobserver = new IntersectionObserver(function (entries, homeobserver) {
                entries.forEach(entry => {
                    console.log(entry.target);
                    if (!entry.isIntersecting) {
                        naik.style.display = "block";
                    } else {
                        naik.style.display = "none";
                    }
                });
            },
            homeoption);

        homeobserver.observe(home);
    </script>
    <!-- Template Javascript -->
    {{-- <script src="js/main.js"></script> --}}

</body>

</html>