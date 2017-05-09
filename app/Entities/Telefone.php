<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'pessoa_id',
        'descriçao',
        'codpais',
        'ddd',
        'prefixo',
        'sufixo'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function getNumeroAttribute()
    {
        return "{$this->codPais} ({$this->ddd}) $this->prefixo-$this->sufixo";
    }
}