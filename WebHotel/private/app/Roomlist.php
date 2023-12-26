<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomlist extends Model
{
    protected $guarded = [];
    protected $table = 'tb_room';
    protected $fillable = ['id', 'judul', 'foto', 'harga','ukuran','kapasitas','tipe_bed','servis','deskripsi'];
}
