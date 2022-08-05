<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekapandata extends Model
{
    use HasFactory;
    protected $table = "rekapandata";
    protected $fillable = [
        'nama_id'
    ];
}
