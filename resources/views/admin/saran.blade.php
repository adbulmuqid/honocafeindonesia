@extends('admin.sidebar')
@section('container')

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Saran & Kritik</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Saran & Kritik</li>
                        </ol>
                      <table class="table">
                    <thead>
                     <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subjek</th>
                            <th scope="col">Pesan</th>
                        </tr>
                        </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tbody>

                              <tr>
                                    <!-- <td>{{$data->id}}</td> -->
                                    <td>{{$loop->iteration}}</td>
                                    <td >{{$data->nama}}</td>
                                    <td >{{$data->email}}</td>
                                    <td >{{$data->subjek}}</td>
                                    <td >{{$data->isi}}</td>

                              </tr>

                        </tbody>
                  @endforeach
        </tbody>
            </table>
            </div>
            </main>
        @endsection
