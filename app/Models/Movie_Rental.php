<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie_Rental extends Model
{
    protected $table = 'movie_rental';
    protected $fillable = ['price','observations'];
    protected $guarded = ['id'];

}
