@extends('layouts.admin')

         @section('title', 'Data Pelapor')

    @section('content')
    <a href="create.html" class="btn btn-primary mb-3">Daftar Data Pelapor</a>
     <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Nama</th>
                            <th>Avatar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($residents as $resident)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$resident->user->email}}</td>
                            <td>{{$resident->user->name}}</td>
                            <td>
                                <img src="{{ asset('storage/' . $resident->avatar) }}" alt="Avatar" class="img-fluid" style="max-width: 50px; max-height: 50px;">
                            <td>
                                <a href="edit.html" class="btn btn-warning">Edit</a>

                                <a href="show.html" class="btn btn-info">Show</a>

                                <form action="" method="POST" class="d-inline">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection