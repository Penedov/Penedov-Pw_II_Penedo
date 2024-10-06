<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionario';

    public $fillable = ['idfuncionario','nome','datacontratacao','telefone','email','cpf','endereço'];
    
    public $timestamps = false;
}
