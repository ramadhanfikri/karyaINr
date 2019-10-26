<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css"></style>


  <link rel="stylesheet" type="text/css" href="tubes/card.css">

  <title>HOME</title>

  <style type="text/css">
  nav .carousel {
    height: 100vh !important;
  }
</style>
</head>
<body>
  <!-- NAVBAR -->
  <article>
    <nav class="navbar navbar-expand-lg navbar-white bg-black fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active mx-3 ">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="tubes/karya2.php">Galery</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="karya3.php">Destination</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="karya4.php">About</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </article>
  <!-- NAVBAR -->

  <!-- SIDEBAR -->
  <article class="slidebar">  
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators ">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img1/pantai.jpg" class="d-block w-100  " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Senja,Kabupaten Barru</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img1/paralex.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Pantai Liukang,Kabupaten Bulukumba</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img1/pantai1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 >Pantai Samalona,Makassar</h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </article>
  <br><br>

  <!-- SIDEBAR -->

  <div class="text-center " style="background-color:; height: 60px; width: 100%;">
    <h3 class="letter" ><span style="color: black;"> GALERY </h3><br>
    <h4 style="font-family: Garamond,serif; "></h4>
  </div>

  <!-- CARD -->
   <?php 
      include "connect.php";
            $sql = mysqli_query($connect, "select * from tbl_home");
            if (mysqli_num_rows($sql)) {
                foreach ($sql as $data) { ?>  
  <div class="container2 mb-5 " align="center" id="galery" >
    <div class="contain">
     <div class="box3">
      <div class="imgbox">
        <img src="tubes/rama.jpg">
      </div>
      <div class="details">
        <div class="content3">
          <h2><?=$data['judul']?></h2>
          <p><?=$data['content']?></p>
        </div>
      </div>
    </div>
    <div class="box3">
      <div class="imgbox">
        <img src="tubes/samalona.jpg">
      </div>
      <div class="details">
        <div class="content3">
          <h2>SAMALONA</h2>
          <p>Kawasan pulau ini sangat bagus utuk menyelam, karena di sekelilingnya terdapat karang-karang laut yang dihuni beraneka ragam ikan tropis dan biota laut lainnya.Pulau ini berjarak sekitar 6,8 Km dari Kota Makassar yang dapat ditempuh sekitar 20 – 30 menit dengan menggunakan speed boot. </p>
        </div>
      </div>
    </div>
    <div class="box3">
      <div class="imgbox">
        <img src="tubes/malino1.jpg">
      </div>
      <div class="details">
        <div class="content3">
          <h2>MALINO</h2>
          <p>Malino merupakan tempat wisata di Sulawesi Selatan yang memberikan pemandangan alam pegunungan dan dataran tinggi yang sangat sejuk dan memanjakan mata.Sebuah kelurahan yang terletak di Kab. Gowa ini menyajikan keindahan pegunungan bahkan sebelum anda mencapai tempat tujuan. </p>
        </div>
      </div>
    </div>
    <div class="box3">
      <div class="imgbox">
        <img src="tubes/lacolla.jpg">
      </div>
      <div class="details">
        <div class="content3">
          <h2>AIR TERJUN LACOLLA</h2>
          <p>Maros sudah seperti negeri seribu air terjun di Sulawesi Selatan, Ada banyak pilihannya dan semuanya indah. Yang pertama ada Air terjun Lacolla di Desa Cendarana Baru. Tempatnya masih tersembunyi dan sepi pengunjung, kamu bisa bebas menikmati alam. Bentuknya bertingkat dengan aliran yang tidak terlalu deras.  </p>
        </div>
      </div>
    </div>
  </div>        
</div>
    <?php
                } 
            }
        ?>
<!-- CARD -->
<div class="text-center " style="background-color:; height: 60px; width: 100%;">
    <h3 class="letter" ><span style="color: black;"> DESTINATION </h3><br>
    <h4 style="font-family: Garamond,serif; "></h4>
  </div>

<!-- DESTINATION -->
  <article>
  <div class="container">
    <div class="row mt-5 ">
      <div class="col">
        <div class="card" style="width:;">
          <img src="tubes/lappalaona.jpg" class="card-img-top" alt="..." height="300">
          <div class="card-body" align="center">
            <h5 class="card-title">BUMI HIBRIDAH</h5>
            <p class="card-text">KABUPATEN BARRU</p>
             <a href="" class="btn btn-dark">EXPLORE</a>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width:;">
          <img src="tubes/malino.jpg" class="card-img-top" alt="..." height="300">
          <div class="card-body" align="center">
            <h5 class="card-title">TANAH BAMBU RUNCING</h5>
            <p class="card-text">KABUPATEN PANGKEP</p>
             <a href="" class="btn btn-dark">EXPLORE</a>

          </div>
        </div>
      </div>
       <div class="col">
        <div class="card" style="width:;">
          <img src="tubes/fikri3.jpg" class="card-img-top" alt="..." height="300">
          <div class="card-body" align="center">
            <h5 class="card-title">KOTA TURIKALE</h5>
            <p class="card-text">KABUPATEN MAROS</p>
             <a href="" class="btn btn-dark">EXPLORE</a>

          </div>
        </div>
      </div>
  </div>

</div>

</div>
</article>
<br><br>

<!-- DESTINATION -->

 <!-- IMAGE -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <img src="tubes/sulsel.jpg" style="border-radius: 10px;">
      </div>
        <div class="col-sm mt-5 mt-2" >
          <p>Sulawesi Selatan adalah sebuah provinsi di Indonesia yang terletak di bagian selatan Sulawesi. Ibu kotanya adalah Makassar. Provinsi Sulawesi Selatan terletak di 0°12' - 8° Lintang Selatan dan 116°48' - 122°36' Bujur Timur. Luas wilayahnya 45.764,53 km². Provinsi ini berbatasan dengan Sulawesi Tengah dan Sulawesi Barat di utara, Teluk Bone dan Sulawesi Tenggara di timur, Selat Makassar di barat dan Laut Flores di selatan. 
          Sampai dengan Mei 2018, jumlah penduduk di Sulawesi Selatan terdaftar sebanyak 8.032.551 jiwa dengan pembagian 3.921.543 orang laki-laki dan 4.111.008 orang perempuan. Pada tahun 2013, penduduk di Sulawesi Selatan sudah mencapai 8.342.047 jiwa<p>
        </div>
    </div>
  </div>
  <<br><br>
  <!-- IMAGE -->

 <!-- Footer -->
   <footer class="page-footer font-small bg-light pt-4">

    <div class="container">

      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase">where we are now</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4071138.153715122!2d117.19444794664939!3d-4.817919891306783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d0cfa80fd6bbe8b%3A0x1030bfbcaf71af0!2sSulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1571411387535!5m2!1sid!2sid" max-width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3">

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->

            <h5 class="text-uppercase">Media Social</h5>
            <a href="#"><i class="fa fa-facebook" style="font-size:48px; margin-right: 8px; margin-top: 30px; color: black; ;"></i></a>
            <a href="https://www.instagram.com/visit_sulsel/"><i class="fa fa-instagram" style="font-size:48px; margin-right:8px; margin-top:30px; 8px; color:black;"></i></a>
            <a href="#"><i class="fa fa-twitter" style="font-size:48px; color:black; margin-top: 10px;"></i></a>



          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">About Us</h5>

            <ul class="list-unstyled">
              <li> Visit Sulawesi Selatan adalah sebuah website yang berisi tentang pusat informasi mengenai 24 kabupaten yang ada di sulawesi selatan.
              </li>


            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>