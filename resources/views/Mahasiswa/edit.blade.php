@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar')

@section('content')
<p><h3>Dasboard website mahasiswa</h3></p>

@include('layouts.alert')

<form action="{{ route('mhs.update', $mhs->nim) }}" method="POST">
@csrf 
@method('PUT')

<div class="form-group row">
<label for="nim" class="col-sm-12">NIM</label>
<div class="col-sm-3">
<input type="text" name="nim" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa" value="{{ #mhs->nim}}" readonly>
     @error('Nim')<small id="nim" class="form-text text-danger">{{ $message }}</small>@enderror
    
</div>
</div>
<div class="form-group row">
<label for="nim" class="col-sm-12">Nama Lengkap</label>
<div class="col-sm-3">
<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Masukan nama dengan benar" value="{{ #mhs->Nama Lengkap}}" readonly>"
     @error('Nim')<small id="nama_lengkap" class="form-text text-danger">{{ $message }}</small>@enderror

     </div>
</div>
<div class="form-group row">
<label for="nim" class="col-sm-12">Falkutas</label>
<div class="col-sm-3">
<select name="Fakultas" id="Fakultas" class="form-control">
     @foreach($fakultas as $istem)
     <option value="{{ $istem->kode_Fakultas }}" {{($mhs->prodi==$istem->Kode_Fakultas) ? 'selected' : ''}}>{{ $istem->nama_falkustas }}
     </option>

     @endforeach
     </select>
     <small id="nama" class="form-text text-muted"></small>
     </div>
</div>
<div class="form-group row">
<label for="nim" class="col-sm-12">Alamat</label>
<div class="col-sm-8">
<textarea name="alamat" class="form-control" id="alamat">{{ $mhs->alamat }}</textarea>
<small id="nama" class="form-text text-muted"></small>
</div>
</div>
<button class="btn btn-primary" type="submit">simpan</button>
<a href="{{ url()->previous() }}" class="btn btn-danger">batal</a>
</form>
@endsection