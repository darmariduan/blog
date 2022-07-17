<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // required data
    //protected $fillable = ['title', 'excerpt', 'body'];

    //no change
    protected $guarded = ['id'];
}
