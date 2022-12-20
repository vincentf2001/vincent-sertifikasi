<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fungsi ini akan dipanggil ketika membuka halaman adminpages/peminjamans/pinjamindex

        $peminjamans = Loan::all();
        $users = User::all();
        $spesifikasiBuku = Book::all();

        return view('adminpages/peminjamans/pinjamindex', compact('peminjamans', 'users', 'spesifikasiBuku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // fungsi ini akan dipanggil ketika membuka halaman adminpages/peminjamans/tambahpinjambuku (halaman untuk membuat pinjaman)

        $users = User::all();
        $spesifikasiBuku = Book::all();

        $pinjam_date = Carbon::now()->format('Y-m-d');
        $kembali_date = Carbon::now()->addDays(7)->format('Y-m-d');

        return view('adminpages/peminjamans/tambahpinjambuku', compact('users', 'spesifikasiBuku', 'pinjam_date', 'kembali_date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // fungsi ini akan dipanggil ketika klik tombol submit pada saat membuat pinjaman

        $input = $request->all();
        Loan::create($input);
        return redirect('adminpages/peminjamans/pinjamindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // fungsi ini akan dipanggil ketika membuka halaman adminpages/peminjamans/pinjamindex (halaman untuk mengedit status buku)

        $peminjamans = Loan::find($id);
        $input = $request->all();
        $peminjamans->update($input);
        return redirect('adminpages/peminjamans/pinjamindex')->with('flash_message', 'Buku Sudah Dikembalikan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // fungsi ini akan dipanggil untuk menghapus pinjaman

        $peminjamans->delete();

        return redirect('adminpages/peminjamans/pinjamindex');
    }
}
