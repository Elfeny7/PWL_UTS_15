<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "books";
    public $timestamps = false;
    protected $primaryKey = 'kode_buku';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_buku',
        'judul',
        'pengarang',
        'jenis_buku',
        'harga',
        'qty',
      
    ];
};
