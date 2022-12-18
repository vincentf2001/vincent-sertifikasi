@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Daftar Peminjam Buku</div>
                    <div class="card-body">
                    <tr>
                            <td><a href="{{ url('adminpages/admin') }}" class="btn btn-success btn-sm" title="Tambah Buku Baru">
                            <i class="fa fa-plus" aria-hidden="true"></i> Katalog Buku
                        </a></td>
                            <td><a href="{{ url('adminpages/peminjamans/tambahpinjambuku') }}" class="btn btn-success btn-sm" title="Tambah Buku Baru">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Peminjam Buku
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
                                        <th>Peminjam</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Status</th>
                                        <th>Approval</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($peminjamans as $peminjaman)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        @foreach($spesifikasiBuku as $itembuku)
                                            @if ($peminjaman->spesifikasiBuku_id == $itembuku->id)
                                                <td> {{$itembuku->namaBuku}}</td>
                                            @endif
                                        @endforeach
                                        @foreach ($users as $user)
                                            @if ($peminjaman->user_id == $user->id)
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $user->email }}
                                                </td>
                                            @endif
                                        @endforeach
                                        <td>{{ $peminjaman->pinjam_date }}</td>
                                        <td>{{ $peminjaman->kembali_date }}</td>
                                        <td>@if($peminjaman->status == 0)
                                                Sudah Kembali
                                            @endif

                                            @if($peminjaman->status == 1)
                                                Belum Kembali
                                            @endif</td>

                                        <td>
                                        @if ($peminjaman->status == 1)
                                            <form method="POST" action="{{ url('/adminpages/peminjamans/pinjamindex/' . $peminjaman->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('Patch') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                                 value= 0 />
                                                <button type="submit" class="btn btn-primary     btn-sm" title="Selesai" onclick="return confirm(&quot;Buku sudah dikembalikan?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Kembalikan</button>
                                            </form>
                                        @endif
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