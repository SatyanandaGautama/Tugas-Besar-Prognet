<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $guarded = [];
    protected $table = 'tb_galeri';
    protected $fillable = ['id', 'judul', 'foto'];
}
