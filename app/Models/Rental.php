<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = 'rentals';
    protected $fillable = ['start_date','end_date','total'];
    protected $guarded = ['id'];

}
