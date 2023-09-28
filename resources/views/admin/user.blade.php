{{-- @extends('layout.main')
@section('top')
    <h1>DAFTAR USER</h1>
    <a href="/user-add" class="btn btn-primary mb-3">Tambah Data</a>

    @foreach ($daftar as $list)
    <div class="card mt-3 w-100" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $list->username }}</h5>
            <p class="card-text">{{ $list->namauser }}</p>
            <p class="card-text">{{ $list->email }}</p>
            <p class="card-text">{{ $list->no_telp }}</p>
            <a href="/user-edit/{{ $list->id }}" class="btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Edit</a>
            <a href="/user-delete/{{ $list->id }}" class="btn btn-primary" style="background-color: #E0004D; border-color:#E0004D">Delete</a>
        </div>
    </div>
    @endforeach

@endsection --}}


@extends('layout.admin')
@section('content')

<h1 class="h3 mb-2 text-gray-800">TABEL DATA</h1>
{{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> --}}

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA USER</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Nama User</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar as $list)
                        <tr>
                            <td>{{ $list->username }}</td>
                            <td>{{ $list->namauser }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->no_telp }}</td>                           
                            <td> <a href="/poli-edit/{{ $list->id }}" class="btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Edit</a>
                                <a href="/poli-delete/{{ $list->id }}" class="btn btn-primary" style="background-color: #E0004D; border-color:#E0004D">Delete</a>
                            </td>
                        </tr>    
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection