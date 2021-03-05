<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['tanggal', 'asal_sekolah', 'jumlah_peserta', 'status', 'id_user'];
}
