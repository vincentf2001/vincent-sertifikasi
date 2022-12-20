<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'peminjamanbuku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'spesifikasiBuku_id',
        'user_id',
        'pinjam_date',
        'kembali_date',
        'status'
    ]; //memberitahukan kepada laravel apa saja field yang dapat di isi

    public function spesifikasiBukus()
    {
        // eloquent laravel untuk terhubung dengan tabel spesifikasiBuku

        return $this->belongsTo(Book::class, 'spesifikasiBuku_id', 'id');
    }

    public function users()
    {
        // eloquent laravel untuk terhubung dengan tabel users

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
