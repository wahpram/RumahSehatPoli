@extends('layout.landing')
@section('head')

<h1 class="mt-3 mb-3">List Spesialisasi</h1>

    <div class="input-group mb-5">
        <input type="text" class="form-control" placeholder="Cari Dokter dan Spesialisasi">
        <div class="input-group-prepend">
            <span class="input-group-text px-4"> CARI</span>
        </div>
    </div>

    <div>
        <h2>Hasil Pencarian</h2>
        <span>Berbagai pilihan spesialisasi</span>
    </div>


    @foreach ($daftar as $list)
        
    <div class="card mt-3" style="width: 100%;">
        <div class="card-body">
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <img src="img/anak.png" alt="Hai">
                </div>

                <div class="p-2 bd-highlight">
                    <h5 class="card-title">{{ $list->nama_dokter }}</h5>
                    <p class="card-text" style="text-align: justify;">{{ $list->poli->nama_poli }}</p>

                    <a href="/list-dokter/{{ $list->id }}" class="btn btn-danger">Lihat Dokter</a>
                </div>
            </div>
        </div>
    </div>

    @endforeach

@endsection