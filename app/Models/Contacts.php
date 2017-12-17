<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'Contacts';

    public $timestamps = true;

    protected $fillable = ['name','mail','sujet','message'];
}
