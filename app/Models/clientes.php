<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $primaryKey = 'idCli'; // primary key de la tabla
    protected $fillable = ['nombre', 'apP', 'apM', 'correo', 'tel', 'calle', 'idMun'];//campos de la tabla clientes
    public function municipio()
    {
        return $this->belongsTo(Municipios::class, 'idMun', 'idMun'); 

    }

}