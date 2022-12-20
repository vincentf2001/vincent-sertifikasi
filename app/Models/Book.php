<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'spesifikasibuku';
    protected $primaryKey = 'id';
    protected $fillable = ['namaBuku', 'penulis', 'bahasa', 'halaman', 'ISBN'];

    public function peminjamans()
    {
        return $this->hasMany(Loan::class, 'spesifikasiBuku_id', 'id');
    }
}
