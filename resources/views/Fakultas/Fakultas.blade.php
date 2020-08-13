@extends('layouts.app')

@section('title', 'Fakultas Page')
@section('bread1', 'Fakultas')
@section('bread2', 'Data')

@section('content')
<p><h4>Master data Fakultas Universitas Muhammadiyah Tangerang</h4></p>

<table class="table table- striped" id="mhs-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode_Fakultas</th>
            <th>Nama_Fakultas</th>
            <th>Dekan</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
</body>
@foreach($list_fakultas as $key => $item)
    <tr>
        <td>{{ $key+1}}</td>
        <td>{{ $item->kode_fakultas }}</td>
        <td>{{ $item->nama_fakultas }}</td>
        <td>{{ $item->dekan }}</td>
    </tr>
@endforeach
</tbody>
</table>

@endsection