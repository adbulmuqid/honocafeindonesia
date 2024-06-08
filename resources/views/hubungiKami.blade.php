@extends('layout.main')
@section('container-navbar')

<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      <h3><span>Contact Us</span></h3>
      <p>Hubungi kami untuk mendapatkan berbagai informasi mengenai Hono Cafe Indonesia</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="bx bx-map"></i>
          <h3>Our Address</h3>
          <p>Jl. Dr. Ir. H. Soekarno No. 679, Rungkut, Surabaya</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="bx bx-envelope"></i>
          <h3>Email Us</h3>
          <p>honocafeindonesia@gmail.com</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="bx bx-phone-call"></i>
          <h3>Call Us</h3>
          <p>082546738946</p>
        </div>
      </div>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-6 ">
        <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=hono cafe indonesia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
      </div>

      <div class="col-lg-6">
        <div class="info-box  mb-4">
            <form id="contact" action="{{ route('saran') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Form Saran/Kritik</h4>
                    </div>
                    <div class="form-group mt-3">
                        <input name="nama" type="text" id="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input name="email" type="email" id="email" class="form-control" placeholder="Your Email Address" required>
                    </div>
                    <div class="form-group mt-3">
                        <select class="form-select" name="subjek" id="tujuan" required>
                            <option value="">Pilih Tujuan</option>
                            <option value="kritik">Kritik </option>
                            <option value="Saran">Saran</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <textarea name="isi" rows="5" id="message" class="form-control" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" id="form-submit" class="btn btn-primary">Send Message</button>
                    </div>
                </div>
            </form>

        </div>
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
