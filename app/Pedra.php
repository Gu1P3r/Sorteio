<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedra extends Model
{
    protected $fillable = [

        'id',
        'numero'
    ];
    protected $table = "pedra";
}
