<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpefikasiBuku;

class SpesifikasiBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('adminpages/addNewBook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        SpefikasiBuku::create($input);
        return redirect('adminpages/admin')->with('flash_message', 'Buku Sudah Ditambahkan!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $spesifikasiBuku = SpefikasiBuku::find($id);
        return view('adminpages/editBook')->with('spesifikasiBuku', $spesifikasiBuku);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $spesifikasiBuku = SpefikasiBuku::find($id);
        $input = $request->all();
        $spesifikasiBuku->update($input);
        return redirect('adminpages/admin')->with('flash_message', 'Spesifikasi Buku Berubah!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // SpefikasiBuku::destroy($id);
        // return redirect('adminpages/admin')->with('flash_message', 'Buku Terhapus!');  
    }
}
