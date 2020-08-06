@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')

@section('content')
<p><h4>Dasboard website mahasiswa</h4>.</p>

<h2>Daftar Mahasiswa</h2>
<table class="table table- striped" id="mhs-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Email UMTINFORMATIAK</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
<script>
  $(function () { 

var table = $('.mhs-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('mhs_daftar.index') }}",
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});

});
</script>
