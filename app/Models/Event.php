<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'id_kategori',
        'nama',
        'keterangan',
        'img',
    ];
    public $timestamps = false;
}
