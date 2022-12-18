@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">Tambah Buku Baru</div>
  <div class="card-body">
      
      <form action="{{ url('adminpages/peminjamans/tambahpinjambuku') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama Buku</label></br>
        <select name="spesifikasiBuku_id" id="spesifikasiBuku_id" class="form-control" >
            @foreach($spesifikasiBuku as $itembuku)
                <option value="{{ $itembuku->id }}">{{$itembuku->namaBuku}}</option>
            @endforeach
        </select></br>
        <label>Nama Peminjam</label></br>
        <select name="user_id" id="user_id" class="form-control">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{$user->email . ' (' . $user->name .')'}}</option>
            @endforeach
        </select></br>
        <label>Tanggal Pinjam</label></br>
        <input type="date" name="pinjam_date" value="{{ $pinjam_date }" id="pinjam_date" class="form-control"></br>
        <label>Tanggal Kembali</label></br>
        <input type="date" name="kembali_date" value="{{ $kembali_date }" id="kembali_date" class="form-control"></br>
        <input type="hidden" name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value= 1 />
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    </div>
  </div>
@endsection