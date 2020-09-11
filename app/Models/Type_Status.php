<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type_Status extends Model
{
    protected $table = 'type_statuses';
    protected $fillable = ['name'];
    protected $guarded = ['id'];

}
