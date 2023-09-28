@extends('layout.landing')
@section('head')

    <h1 class="mt-4 mb-3">Janji Temu Dokter</h1>

    <div class="input-group mb-5">
        <input type="text" class="form-control" placeholder="Cari Dokter dan Spesialisasi">
        <div class="input-group-prepend">
            <span class="input-group-text px-4">CARI</span>
        </div>
    </div>

    <div>
        <h2>Spesialisasi Medis</h2>
        <span>Berbagai pilihan spesialisasi dokter</span>
    </div>

    <div class="d-flex justify-content-between mt-3 span">
        <div class="p-2 bd-highlight">
            <img src="img/kandung.png" alt="">
            <span>Sp.Kandungan & Kebidanan</span>
        </div>
        <div class="p-2 bd-highlight">
            <img src="img/kulit.png" alt="">
            <span>Sp.Kulit & Kelamin</span>
        </div>
        <div class="p-2 bd-highlight">
            <img src="img/tht.png" alt="">
            <span>Sp.THT</span>
        </div>
        <div class="p-2 bd-highlight">
            <img src="img/jiwa.png" alt="">
            <span>Sp.Jiwa</span>
        </div>
        <div class="p-2 bd-highlight">
            <img src="img/organ.png" alt="">
            <span>Sp.Penyakit Dalam</span>
        </div>
        <div class="p-2 bd-highlight">
            <img src="img/anak.png" alt="">
            <span>Sp.Anak</span>
        </div>
        <div class="p-2 bd-highlight">
            <img src="img/mata.png" alt="">
            <span>Sp.Mata</span>
        </div>
        <div class="p-2 bd-highlight">
            <img src="img/gigi.png" alt="">
            <span>Sp.Dokter Gigi</span>
        </div>
    </div>

    <div class="p-3 mb-3 mt-5 block">
        <h2>Buat Janji Mudah & Bebas Antri</h2>

        <div class="d-flex justify-content-around mt-5 mb-5 span">
            <div class="p-2 bd-highlight">
                <span>Tersedia dokter dari</span><br>
                <span>berbagai spesialisasi</span>
            </div>
            <div class="p-2 bd-highlight">
                <span>Cepat - tanpa antri &</span><br>
                <span>daftar ulang</span>
            </div>
            <div class="p-2 bd-highlight">
                <span>Tersedia ragam jadwal</span><br>
                <span>sesuai kebutuhanmu</span>
            </div>
        </div>
    </div>

@endsection