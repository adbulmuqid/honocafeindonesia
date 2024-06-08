@extends('admin.sidebar')
@section('container')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">AkunUser</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">AkunUser</li>
        </ol>
        <div>
            <a class="btn btn-primary" href="{{ url('createakunuser') }}" role="button">Tambah Akun</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataakun as $model)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$model->name}}</td>
                    <td>{{$model->email}}</td>
                    <td>{{$model->password}}</td>
                    <td>
                        <a href="{{ route('admin.editakunuser', ['id' => $model->id]) }}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modal-hapus{{ $model->id }}">
                            <i class="fas fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="modal-hapus{{ $model->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah kamu yakin ingin menghapus data akun <b>{{ $model->nama }}</b>?
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('akunuser.delete', ['id' => $model->id]) }}
                                    " method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Ya, Hapus Data</button>
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
