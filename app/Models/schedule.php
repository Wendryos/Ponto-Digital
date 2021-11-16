<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'usuario',
        'data_registro',
        'primeira_entrada',
        'primeira_saida',
        'segunda_entrada',
        'segunda_saida',
        'comprovante'
    ];


}
