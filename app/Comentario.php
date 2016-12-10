<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $fillable = [
        'conteudo', 'user_id', 'topico_id'
    ];

    public function topico()
    {
        return $this->belongsTo('App\Topico');
    }
}
