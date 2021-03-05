<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    protected $fillable = ['id_peserta', 'nama', 'email', 'jenis_kelamin', 'alamat', 'usia', 'no_telpon', 'id_pesanan'];
}
