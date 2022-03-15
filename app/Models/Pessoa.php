<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use database\factories\PessoaFactory;

class Pessoa extends Model
{
    use HasFactory;

    protected $data_nasc = ['date'];

    protected $guarded = [];

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'data_nasc',
        'nacionalidade',
        'telefones'
    ];

}
