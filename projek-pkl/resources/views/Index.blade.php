<body>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

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

        <link rel="stylesheet" href="./style.css">
    <title>Tempat PKL</title>
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

    <section id="header" class="header">
            <div class="container1">
                <div class="title">
                    <h1>Prakerin Di Winata Cyber Net</h1>
                    <!-- lorem14 -->
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, quo est? blanditiis maiores beatae!</p>
                    <a class="btn btn-primary fw-bold my-5 py-3 px-5" href="">DAFTAR SEKARANG</a>
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

    {{-- jurusan --}}

    <section id="jurusan">
        <div class="container-fluid">
            <h1 class="text-center fw-bold display-1 mb-3 pt-5">JURUSAN</h1>
            <div class="row mt-5">
              <div class="owl-carousel owl-theme">
                <div class="item mb-4">
                  <div class="card border-0 shadow">
                    <img src="" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="text-center">BDP (Bisnis Daring Pemasaran)</h5>
                    </div>
                  </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                  <div class="card border-0 shadow">
                    <img src="img/multi.jpg" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="text-center">MM (Multimedia)</h5>
                    </div>
                  </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                  <div class="card border-0 shadow">
                    <img src="hospital2/images/Doctor3.jpg" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="text-center">Design Grafis</h5>
                    </div>
                  </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                  <div class="card border-0 shadow">
                    <img src="hospital2/images/Doctor4.jpg" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="text-center">Animasi</h5>
                    </div>
                  </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                  <div class="card border-0 shadow">
                    <img src="hospital2/images/about.jpg" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="text-center">RPL (Rekayasa Perangkat Lunak)</h5>
                    </div>
                  </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                  <div class="card border-0 shadow">
                    <img src="hospital2/images/Doctor3.jpg" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="text-center">TKJ (Teknik Komputer dan Jaringan)</h5>
                    </div>
                  </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                  <div class="card border-0 shadow">
                    <img src="hospital2/images/Doctor1.jpg" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="text-center">OTKP (Otomatisasi dan Tatakelola Perkantoran)</h5>
                    </div>
                  </div>
                </div>
                <!-- item end -->
              </div>
            </div>
          </div>

        </section>
    {{-- jurusan akhir --}}

    {{-- Ketentuan --}}
          <section class="ketentuan">
              <div class="container3">
                
              </div>
          </section>

    {{-- akhir ketentuan --}}

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
      
        <!-- init owl carousel -->
        <script>
          $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            // nav:true,
      
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
          });
          $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000])
          })
          $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
          })
        </script>

<!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>