<body>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href=" {{asset("/css/style.css") }}" rel="stylesheet">
    <title>Tempat PKL</title>
  </head>

  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgb(249, 249, 250)">
        <div class="container">
            <a class="navbar-brand" href="#">Winata Cyber Net</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="padding-right: 70px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonial</a>
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

    <section id="header">
        {{-- <div class="container">
            <div class="col-md-6 pt-5">
                <h2 class="text fw-bold">WHAT CHOOSE US ?</h2>
            </div>   
        </div>

        <div class="col-md-6">
            <img src="img/header.png" alt="" class="img-fluid ms-5">
        </div> --}}

            <div class="container1">
                <div class="title col-md-6">
                    <h1>Prakerin Di Winata Cyber Net</h1>
                    <!-- lorem14 -->
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, quo est? blanditiis maiores beatae!</p>
                </div>
                <div class="gambarlandingpage col-md-6">
                    <img src="img/header.png" alt="">
                </div>
            </div>

    </section>
    {{-- akhir header --}}

    {{-- about us --}}

    <section id="about">
        <div class="container2">
            <img src="img/about1.jpg" alt="">
            <div class="title2">
                <h1 data-aos="fade-up">About Us</h1>
                <!-- lorem7 -->
                <h4 data-aos="fade-up">Prakerin Winata Cyber Net</h4>
                <!-- lorem50 -->
                <p data-aos="fade-up"> Winata Cyber Net merupakan perusahaan yang lebih fokus ke pemasaran online dan berhubungan dengan teknologi informasi atau dunia digital marketing. Seperti Dunia Usaha Dunia Industri yang lainnya, Winata Cyber Net juga menerima siswa PRAKERIN. Seperti yang sudah diketahui, bahwa kami membuka Lowongan PKL di Cibubur dan sekitarnya.</p>

                <p data-aos="fade-up"> Winata Cyber Net saat ini kami masih menerapkan sistem PRAKERIN seperti pada umumnya, dimana siswa datang ke kantor dan bekerja sesuai bagiannya. Winata Cyber Net akan mulai mengembangkan sistem PRAKERIN online. Sehingga bisa memberikan kesempatan yang lebih luas bagi siswa siswi SMK/Umum yang berdomisili di luar daerah Cibubur.</p>
                {{-- <button data-aos="fade-up">About us</button> --}}
            </div>
        </div>
    </section>
    {{-- about us akhir --}}

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
  </body>
</html>