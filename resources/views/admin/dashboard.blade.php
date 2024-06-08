@extends('admin.sidebar')
@section('container')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                            <ul>
                                <li>Halaman Menu berada di sebelah samping kiri yang bisa di klik dan menuju ke halaman yang dituju</li>
                                <li>Untuk menambahkan data,terdapat tampilan button "tambah". admin bisa menekan button  <a href="#" type="button" class="btn btn-primary" >Tambah</a></li>
                                <li>Untuk mengubah sebuah data, admin bisa menekan button  <a href="#" type="button" class="btn btn-warning" >Edit</a> dan menuju halaman edit halaman</li>
                                <li>Untuk menghapus sebuah data yang terdapat pada tabel tekan tombol <a href="#" type="button" class="btn btn-danger" >Hapus</a> </li>
                                <li>Data yang tampil pada bagian tabel admin, secara otomatis akan ditampilkan pada publik website honocafe </li>
                            </ul>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('')}}/admin/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{url('')}}/admin/assets/demo/chart-area-demo.js"></script>
        <script src="{{url('')}}/admin/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{url('')}}/admin/js/datatables-simple-demo.js"></script>
    </body>
</html>
@endsection
