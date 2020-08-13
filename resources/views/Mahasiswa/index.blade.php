@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar')

@section('content')
<p><h4>Dasboard website mahasiswa</h4></p>

<h2>Daftar Mahasiswa</h2>
<p><a href="/mhs/create" class="btp btn-succes btn-sm">Tambah</a></p>

@include('layouts.alert')

<table class="table table- striped" id="mhs-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama_Lengkap</th>
            <th>Falkutas</th>
            <th>Alamat</th>
            <th>Pilihan</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
</body>

<script>
  $(function () { 
    $('#mhs-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('mhs.daftar') }}",
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'nim', name: 'nim'},
        {data: 'nama_lengkap', name: 'nama_lengkap'},
        {data: 'mfakultas.nama_fakultas', name: 'nama_Fakultas'},
        {data: 'Alamat', name: 'Alamat'},
        {data: 'Action', name: 'Action', orderable: fales, searchable: false},
    ]
});

});
</script>
</html>
@endsection
