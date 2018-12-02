@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
                <div class="panel-heading">Edit Data Barang</div>
    <div class="panel-body">
    <form class="" action="{{ route('barang.update', $barang) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
<div class="form-group">
<label for="">Nama Barang</label>
<input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang.." value="{{ $barang->nama_barang }}">
</div>

<div class="form-group">
<label for="">Deskripsi</label>
<textarea cols="40" rows="7" class="form-control" name="deskripsi" placeholder="Masukkan deskripsi barang.." value="{{ $barang->deskripsi }}"></textarea>
</div>

<div class="form-group">
<input type="submit" value="Simpan" class="btn btn-primary">
</div>
</form>
    </div>
        </div>
    </div>
</div>
</div>
@endsection
