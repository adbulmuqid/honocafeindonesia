@extends('layout.main')
@section('container-navbar')

<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Cerita Tentang <span>HonoCafe</span></h3>
        <p>Jl. Dr. Ir. H. Soekarno No. 679, Rungkut, Surabaya.</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/kebun-kopi.jpg" class="img-fluid" alt="">
        </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3>Budidaya Kopi</h3>
          <p class="fst-italic">
            Di sebuah kota kecil di Jawa Timur, hiduplah seorang pemuda bernama Andi yang memiliki hasrat besar terhadap kopi. Sejak kecil,
            Andi sering membantu kakeknya di ladang kopi milik keluarga. Kakeknya, seorang petani kopi yang bijak, mengajarkan Andi semua hal tentang kopi,
            mulai dari cara menanam, merawat, hingga mengolah biji kopi menjadi minuman yang nikmat.
          </p>
        </div>
      </div>
    </div>
  </section>


  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title"></div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/perkenalkan-kopi.jpeg" class="img-fluid" alt="">
        </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3>Memperkenalkan Kopi Kepada Masyarakat</h3>
          <p class="fst-italic">
            Setelah lulus kuliah di bidang bisnis, Andi memutuskan untuk kembali ke kampung halamannya. Ia ingin membangun sebuah kafe yang bisa memperkenalkan
            cita rasa kopi lokal kepada masyarakat luas. Bersama beberapa temannya yang juga memiliki kecintaan terhadap kopi, Andi mulai merancang konsep kafe impiannya.
            Mereka sepakat memberi nama kafe tersebut "Hono Cafe"
          </p>
        </div>
      </div>
    </div>
  </section>


  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title"></div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/cafe-kopi.jpg" class="img-fluid" alt="">
        </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3>Awal Buka Cafe</h3>
          <p class="fst-italic">
            Pada hari pembukaan Hono Cafe, kerumunan besar berkumpul di depan pintu. Banyak yang penasaran dengan kafe baru ini,
            yang telah banyak dibicarakan di media sosial. Andi dengan bangga menyambut para pengunjung, menjelaskan proses pembuatan kopi dan berbagai jenis kopi
            yang mereka tawarkan. Aroma kopi yang khas segera memenuhi udara, mengundang senyum di wajah setiap orang yang hadir.
          </p>
        </div>
      </div>
    </div>
  </section>



  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title"></div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/hono-kopi.jpg" class="img-fluid" alt="">
        </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3>Hono Cafe Sekarang</h3>
          <p class="fst-italic">
            Keberhasilan Hono Cafe tidak hanya datang dari kopi berkualitas tinggi yang mereka sajikan, tetapi juga dari suasana hangat
            dan ramah yang diciptakan Andi dan timnya. Mereka sering mengadakan acara budaya, yang semakin menarik perhatian warga setempat dan wisatawan.
          </p>
        </div>
      </div>
    </div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WhatsApp Button</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
      <!-- Konten Website Anda -->

      @include('partials.whatsapp')

      <script src="script.js"></script>
  </body>
  </section>


@endsection
