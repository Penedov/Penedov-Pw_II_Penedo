<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    public $fillable = ['idcliente','nome','','endereco','telefone','email', 'datacadastro' , 'sexo' , 'datanascimento' ];

    public $timestamps = false;  
}
