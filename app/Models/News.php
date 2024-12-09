<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps=true;
    protected $fillable = ['title', 'slug', 'body', 'hidden'];
}
