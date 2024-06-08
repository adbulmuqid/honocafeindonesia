@extends('admin.sidebar')
@section('container')

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Galery</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Galery</li>
                        </ol>
                        <div>
                         <a class="btn btn-primary" href="{{ url('creategalery') }}" role="button">Tambah Galery</a>
                        </div>
                      <table class="table">
                    <thead>
                     <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskrpisi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                    <tbody>
                        @foreach ( $datagalery as $model )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$model->judul}}</td>
                            <td>{{$model->deskripsi}}</td>
                            <td><img class="shadow p-3 mb-5 bg-body rounded"
                                src="{{ asset('imagegalery/' . $model->image) }}"
                                alt="" width="150" height="170" ></td>
                            {{-- <td><img src="{{ asset('imagegalery/' . $model->image) }}"></td> --}}
                            <td><a href="{{ route('admin.editgalery', ['id' => $model->id]) }}" type="button" class="btn btn-warning" >edit</a></td>
                            <td><a href="" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-hapus{{ $model->id }}"><i
                                    class="fas fa-trash-alt"></i>Hapus</a></td>
                            <td></td>
                        </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-hapus{{ $model->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi
                                        Hapus Data
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah kamu yakin ingin menghapus data galery
                                    <b>{{ $model->judul }}</b>?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('galery.delete', ['id' => $model->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Ya, Hapus
                                            Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            @endforeach
        </tbody>
            </table>
            </div>
            </main>
        @endsection
