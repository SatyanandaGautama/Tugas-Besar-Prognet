<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];
    protected $table = 'tb_slider';
    protected $fillable = ['id', 'judul', 'foto'];
}
