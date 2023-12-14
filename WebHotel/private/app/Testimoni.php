<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $guarded = [];
    protected $table = 'tb_testimoni';
    protected $fillable = ['id', 'name', 'country', 'testimonial'];
}
