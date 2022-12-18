<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpefikasiBuku extends Model
{
    protected $table = 'spesifikasibuku';
    protected $primaryKey = 'id';
    protected $fillable = ['namaBuku', 'penulis', 'bahasa', 'halaman', 'ISBN'];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'spesifikasiBuku_id', 'id');
    }
}
