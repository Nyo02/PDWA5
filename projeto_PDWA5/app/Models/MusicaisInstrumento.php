<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicaisInstrumento extends Model
{
    use HasFactory;
    protected $fillable = ['Nome','Categoria','Material','Marca','Data_Cadastro', 'Preco'];
}
