@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">Ubah Spesifikasi Buku</div>
  <div class="card-body">
      
      <form action="{{ url('adminpages/editBook/' .$spesifikasiBuku->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$spesifikasiBuku->id}}" id="id" />
        <label>Nama Buku</label></br>
        <input type="text" name="namaBuku" id="namaBuku" value="{{$spesifikasiBuku->namaBuku}}" class="form-control"></br>
        <label>Penulis</label></br>
        <input type="text" name="penulis" id="penulis" value="{{$spesifikasiBuku->penulis}}" class="form-control"></br>
        <label>Bahasa</label></br>
        <input type="text" name="bahasa" id="bahasa" value="{{$spesifikasiBuku->bahasa}}" class="form-control"></br>
        <label>Halaman</label></br>
        <input type="text" name="halaman" id="halaman" value="{{$spesifikasiBuku->halaman}}" class="form-control"></br>
        <label>ISBN</label></br>
        <input type="text" name="ISBN" id="ISBN" value="{{$spesifikasiBuku->ISBN}}" class="form-control"></br>
        <input type="submit" value="Done" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop