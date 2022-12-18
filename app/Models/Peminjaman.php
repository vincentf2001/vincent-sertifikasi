<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
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
    ];

    public function spesifikasiBukus()
    {
        return $this->belongsTo(SpefikasiBuku::class, 'spesifikasiBuku_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
