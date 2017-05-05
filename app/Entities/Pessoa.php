<?php
/**
 * Entidade Pessoa
 * User: Rafael
 * Date: 03/05/17
 * Time: 22:46
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {

    }

}