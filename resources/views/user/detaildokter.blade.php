@extends('layout.landing')
@section('head')

<h1 class="mt-3 mb-3">Detail Spesialisasi</h1>
    
<div class="input-group mb-5">
    <input type="text" class="form-control" placeholder="Cari Dokter dan Spesialisasi">
    <div class="input-group-prepend">
        <span class="input-group-text px-4"> CARI</span>
    </div>
</div>


<div class="row">
    <div class="col-12 col-md-4 mr-2">
        <ul class="list-group">
            <li class="list-group-item">Sp. Kandungan & Kebidanan</li>
            <li class="list-group-item">Sp. Kulit & Kelamin</li>
            <li class="list-group-item">Sp. THT</li>
            <li class="list-group-item">Sp. Jiwa</li>
            <li class="list-group-item">Sp. Penyakit Dalam</li>
            <li class="list-group-item">Sp. Anak</li>
            <li class="list-group-item">Sp. Mata</li>
            <li class="list-group-item">Dokter Gigi</li>
            <li class="list-group-item">Dokter Umum</li>
        </ul>
    </div>

    <div class="col">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <img src="img/anak.png" alt="Hai">
                    </div>

                    <div class="p-2 bd-highlight">
                        <h5 class="card-title">{{ $list->nama_dokter }}</h5>
                        <p class="card-text" style="text-align: justify;">{{ $list->poli->desc1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mt-3 mb-3">Detail Spesialisasi</h4>
        <h6 class="mt-3 mb-3">Dokter dengan kemahiran sesuai dengan bidangnya</h6>
    </div>
</div>

@endsection