<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'spesifikasibuku';
    protected $primaryKey = 'id';
    protected $fillable = ['namaBuku', 'penulis', 'bahasa', 'halaman', 'ISBN']; //memberitahukan kepada laravel apa saja field yang dapat di isi

    public function peminjamans()
    {
        // eloquent laravel untuk terhubung dengan tabel peminjaman

        return $this->hasMany(Loan::class, 'spesifikasiBuku_id', 'id');
    }
}
