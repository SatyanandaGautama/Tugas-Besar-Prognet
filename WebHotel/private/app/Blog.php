<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];
    protected $table = 'tb_blog';
    protected $fillable = ['id','judul_blog','tema_blog','foto','deskripsi'];
}
