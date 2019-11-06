<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [

        'id',
        'nome',
        'image'
    ];

    protected $table = "pessoa";


    public static function listagemID($id){

        $result = static::where('id', '=', $id)->get();

        return $result;
    }
    
}
