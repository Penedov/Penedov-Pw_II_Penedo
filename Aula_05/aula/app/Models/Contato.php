<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'tbContato';

    public $fillable = ['idContato','nomeContato','','emailContato','assuntoContato','mensagemContato'];

    public $timestamps = false;    
}