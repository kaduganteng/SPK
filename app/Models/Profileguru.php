<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profileguru extends Model
{
    use HasFactory;

    protected $table = "profileguru" ;
    protected $fillable = [
     'foto_diri',
     'nama',
     'tgl_lahir',
     'alamat',
     'nip',
     'status'
    ];
}
