@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar')

@section('content')
<p><h4>Dasboard website mahasiswa</h4></p>

<h2>Daftar Mahasiswa</h2>
<table class="table table- striped" id="mhs-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>nim</th>
            <th>nama_lengkap</th>
            <th>Falkutas</th>
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
        {data: 'Id', name: 'Id'},
        {data: 'nim', name: 'nim'},
        {data: 'nama_lengkap', name: 'nama_lengkap'},
        {data: 'Fakultas', name: 'Fakultas'},
    ]
});

});
</script>
</html>
@endsection
