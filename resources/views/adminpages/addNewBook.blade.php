@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">Tambah Buku Baru</div>
  <div class="card-body">
      
      <form action="{{ url('adminpages/addNewBook') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama Buku</label></br>
        <input type="text" name="namaBuku" id="namaBuku" class="form-control"></br>
        <label>Penulis</label></br>
        <input type="text" name="penulis" id="penulis" class="form-control"></br>
        <label>Bahasa</label></br>
        <input type="text" name="bahasa" id="bahasa" class="form-control"></br>
        <label>Halaman</label></br>
        <input type="number" name="halaman" id="halaman" class="form-control"></br>
        <label>ISBN</label></br>
        <input type="text" name="ISBN" id="ISBN" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    </div>
  </div>
@endsection