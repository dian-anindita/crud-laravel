@extends('layouts.app')

@section('content')

<div class="container">
<form class="" action="{{ route('barang.store') }}" method="post">
{{ csrf_field() }}
<div class="form-group">
<label for="">Nama Barang</label>
<input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang.." >
</div>

<div class="form-group">
<label for="">Deskripsi</label>
<textarea cols="40" rows="7" class="form-control" name="deskripsi" placeholder="Masukkan deskripsi barang.."></textarea>
</div>

<div class="form-group">
<input type="submit" value="Simpan" class="btn btn-primary">
</div>

</form>

</div>

@endsection