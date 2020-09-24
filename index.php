<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Latihan PASS Cloud Computing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
 /*   width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#facilities">CAMPUS FACILITIES</a></li>
        <li><a href="#now">BUT NOW</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="uin-jakarta.jpg" alt="UIN JKT" width="1200px" height="700px">
        <div class="carousel-caption">
          <h3>My Campus</h3>
          <p>UIN Syarif Hidayatullah Jakarta</p>
        </div>      
      </div>

      <div class="item">
        <img src="uin-jakarta4.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>My Campus</h3>
          <p>UIN Syarif Hidayatullah Jakarta</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="uin-jakarta3.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>My Campus</h3>
          <p>UIN Syarif Hidayatullah Jakarta</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (Facilities) -->
<div id="facilities" class="container text-center">
  <h3>UIN Syarif Hidayatullah Jakarta</h3>
  <p>Terletak di Kota Tanggerang Selatan. Awalnya merupakan Akademi Dinas Departemen Agama (ADIA) yang berdiri pada tahun 1957. Hingga pada tahun 2002 resmi menjadi UIN Syarif Hidayatullah Jakarta.</p>
  <p><em>Beberapa Fasilitas di UIN Jakarta</em></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Auditorium</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="auditorium.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Audutorium kebanggan UIN Jakarta. Terletak paling depan didekat gerbang utama. Menjadi tempat dilaksanakannya acara-acara penting mulai dari acara kemahasiswaan hingga acara akademik seperti acara wisuda. Semoga kita semua dapat diwisuda di sana setelah pandemi ini berlalu.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Perpustakaan</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="perpustakaan.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Perpustakaan Utama UIN Jakarta yang menjadi tempat berkumpul mahasiswa. Fungsi utamanya sebagai tempat sumber buku mahasiswa UIN Jakarta. Fungsi lainnya, bisa jadi tempat belajar, mengerjakan tugas, bahkan skripsian</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Kantin</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="cafe cangkir.jfif" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Cafe Cangkir adalah tempat nongkrong mahasiswa UIN sambil mengisi perut yang lapar di sela-sela perkuliahan. Diberi nama Cafe Cangkir karna bangunan yang berbentuk cangkir.</p>
      </div>
    </div>

    <div class="col-sm-4">
      <p class="text-center"><strong>Ruang Kelas</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="kelas.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Ruang Kelas tempat belajar setiap ada mata kuliah setiap harinya. sama seperti ruang kelas lainnya, ruang kelas di uin juga dilengkapi kursi, AC, LCD/Proyektor dan lainnya. Ga jauh beda sama ruang kelas lainnya.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Taman</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="gazebo.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo5" class="collapse">
        <p>Taman yang ada disekitar UIN Jakarta biasa dimanfaat mahasiswa untuk berkumpul dan kegiatan lainnya sambil ditemani oleh hembusan angin. Dibeberapa fakultas terdapat gazebo-gazebo yang membuat mahasiswa makin betah berlama-lama berada dikampus.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>PLT</strong></p><br>
      <a href="#demo6" data-toggle="collapse">
        <img src="plt.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo6" class="collapse">
        <p>Pusat Laboratorium Terpadu adalah Lab yang banyak digunakan oleh mahasiswa dari Fakultas Sains dan Teknolog. Dilengkapi dengan fasilitas yang lengkap dalam mendukung perkuliahan.</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (But Now) -->
<div id="now" class="container text-center">
  <h3>My Campus Now</h3>
  <p>Sejak pandemi COVID-19 merebak semua fasilitas yang ada di UIN tidak bisa lagi dimanfaat. Karna, semua kegiatan perkuliahan dilakukan dari jarak jauh sekara daring.</p>
      <img src="sfh.jpeg" class="img-circle person" alt="Random Name" width="255" height="255">
   <p>Sekarang kegiatan perkuliahan saya semua dilakukan disini saja. Hanya didepan Laptop seharian. Semoga pandemi ini cepat berlalu.</p>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">My Contact</h3>
  <div class="row">
    <div class="col-md-4">
      <p><span class="glyphicon glyphicon-map-marker"></span>Sumatra Barat, Indonesia</p>
      <p><span class="glyphicon glyphicon-ig"></span>IG: <a href="https://www.instagram.com/dzakiyyah_adrion/" data-toggle="tooltip"  title="Visit w3schools">dzakiyyah_adrion</a></p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: annisadzakiyyah.hanifah18@mhs.uinjkt.ac.id </p>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
