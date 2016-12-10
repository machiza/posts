<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    protected $table = 'topicos';

    protected $fillable = [
        'topico'
    ];

    public function comentarios()
    {
        return $this->hasMany('App\Comentario');
    }
}
