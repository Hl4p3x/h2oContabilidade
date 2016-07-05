<?php

namespace h2o\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Contato extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome', 'email', 'telefone', 'assunto', 'mensagem'
    ];

}
