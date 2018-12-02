@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Barang</div>
<div class="panel-body">
<a href="{{ route('barang.store') }}" class="btn btn-danger"/>Tambah data Barang</a><br><br>
<table class="table table-bordered">
<thead>
    <th>No.</th>
    <th align="center">Nama Barang</th>
    <th align="center">Deskripsi</th>
    <th colspan="2" align="center">Action</th>
</thead>
<tbody>
@foreach ($barangs as $barang)
    <tr>
        <td>{{ $barang->id }}</td>
        <td>{{ $barang->nama_barang }}</td>
        <td>{{ $barang->deskripsi }}</td>
        <td><a class="btn btn-success"  href="{{action('BarangController@edit', $barang['id'])}}"/>Edit</a></td>
		<td>
          <form action="{{action('BarangController@destroy', $barang['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
    </tr>
@endforeach
    
</tbody>
</table>

@endsection