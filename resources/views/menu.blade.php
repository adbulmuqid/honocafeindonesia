@extends('layout.main')
@section('container-navbar')

<div class="container mg-5">
    <div class="text-center">>
        <img src="assets/img/banner_menu.png" class="img-fluid" alt="...">

    </div>
    <div class="row">
@foreach ($dataproduk as $model)
        <div class="col-4">
            <div class="card mb-3" style="max-width: 540px; min-height: 200px;">
                <div class="row g-0">
                  <div class="col-md-4">
            <img src="{{url('')}}/imageproduk/{{$model->image}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h4 class="card-title" style="font-size:1.2em">{{$model->nama_produk}}</h4>
                      <h5 class="card-text" style="font-size:1em"> {{$model->harga}}</h5>
                      <p class="card-text" style="font-size:0.9em">{{$model->deskripsi}}</p>
                          <a href="/downloadApps"><div>
                        <button type="button" class="btn btn-outline-success">Pesan</button>
                      </div></a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        @endforeach



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

@endsection
