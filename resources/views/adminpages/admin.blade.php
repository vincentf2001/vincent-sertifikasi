@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Katalog Buku Petugas</div>
                    <div class="card-body">
                        <tr>
                            <td><a href="{{ url('adminpages/peminjamans/pinjamindex') }}" class="btn btn-success btn-sm" title="Tambah Buku Baru">
                            <i class="fa fa-plus" aria-hidden="true"></i> List Peminjaman Buku
                            </a></td>
                            <td><a href="{{ url('adminpages/addNewBook') }}" class="btn btn-success btn-sm" title="Tambah Buku Baru">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Buku
                        </a></td>
                        </tr>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Buku</th>
                                        <th>Penulis</th>
                                        <th>Bahasa</th>
                                        <th>Halaman</th>
                                        <th>ISBN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($spesifikasiBuku as $itembuku)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $itembuku->namaBuku }}</td>
                                        <td>{{ $itembuku->penulis }}</td>
                                        <td>{{ $itembuku->bahasa }}</td>
                                        <td>{{ $itembuku->halaman }}</td>
                                        <td>{{ $itembuku->ISBN }}</td>
 
                                        <td>
                                            <a href="{{ url('/adminpages/editBook/'. $itembuku->id ) }}" title="Ubah"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <!-- <form method="POST" action="{{ url('/adminpages/admin/' . $itembuku->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form> -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection