<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $table = 'card';
    protected $fillable = ['name','adress','image'];
}
