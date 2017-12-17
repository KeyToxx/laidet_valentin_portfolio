<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeries extends Model
{
    protected $table = 'galeries';
    protected $fillable = ['name','image','lien'];
}
