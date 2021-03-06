<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';

    protected $fillable = [
        'descrição',
        'email',
        'pessoa_id'
    ];


    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}