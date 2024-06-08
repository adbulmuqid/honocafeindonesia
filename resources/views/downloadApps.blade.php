@extends('layout.main')
@section('container-navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Aplikasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container-download {
            width: 80%;
            margin: 50px auto;
        }
        h1 {
            margin-bottom: 30px;
        }
        .download-links {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .download-links img {
            width: 150px;
            height: auto;
        }
        .container-download h1{
            color: rgb(11, 125, 108);
        }
    </style>
</head>
<body>
    <div class="container-download">
        <h5>HONO CAFE APLICATION MOBILE</h5>
        <h1>Cepat, Mudah dan Terpercaya dengan Banyak Kemudahan</h1>
        <h5>Nikmati pengalaman ngopi dengan penawaran spesial. Ngopi enak dengan rasa autentik khas nusantara! Pesan di aplikasi kami dan lewati antrian. Gampang, bukan?</h5>
        <div class="download-links">
            <a href="<?php echo generatePlayStoreLink('nama.package.aplikasi'); ?>">
                <img src="assets/img/play_store.png" alt="Download di Google Play Store">
            </a>
            <a href="<?php echo generateAppStoreLink('nama-aplikasi'); ?>">
                <img src="assets/img/app_store.png" alt="Download di App Store">
            </a>
        </div>
        <img src="assets/img/banner_download.png" alt="">
    </div>


</body>
</html>

<?php
function generatePlayStoreLink($packageName) {
    // URL ke Google Play Store dengan ID paket aplikasi
    return "https://drive.google.com/file/d/1cCIk8Nt-xsvcDBVJjn1ksYtuzJGZ0K5_/view?usp=sharing"  . $packageName;
}

function generateAppStoreLink($appName) {
    // URL ke App Store dengan ID aplikasi
    return "https://drive.google.com/file/d/1cCIk8Nt-xsvcDBVJjn1ksYtuzJGZ0K5_/view?usp=sharing" . $appName . "/id123456789";
}
?>
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

@endsection
