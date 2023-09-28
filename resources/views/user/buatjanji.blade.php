@extends('layout.landing')
@section('head')
<div class=" container shadow p-5 mb-5 bg-white rounded">
    
    <h2 style="text-align: center" class=" my-2">Hi Teman!</h2>

    <p style="text-align: center" class=" my-3">Ayo masukkan sesuai keluhan yang kamu alami yaa</p>

    <div class="container pl-4" style="background-color: #F0F3F7">
        <div class="container">
            <h3 class="pt-4 my-4">Basic Information</h3>

            <form>
                <div class="form-group row">
                    <labeln for="hubungan" class="col-sm-2 col-form-label">Hubungan</labeln>
                    
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="hubungan" placeholder="Hubungan dengan user....">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="Nama lengap anda....">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="ttl" placeholder="Tempat, tanggal lahir">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kartu" class="col-sm-2 col-form-label">Kartu Identitas</label>
                    
                    <div class="col-sm-10 d-flex align-items-center">
                        <input type="file" id="kartu">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="desc" class="col-sm-2 col-form-label">Deskripsi Keluhan</label>
                    
                    <div class="col-sm-10">
                        <textarea name="desc" id="desc" cols="86" rows="10"></textarea>
                    </div>
                </div>

                <div class=" form-group row justify-content-center py-5">
                    <button class=" btn btn-danger">Buat Janji</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection