<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    use HasFactory;
    //la bd en la tabla debe de esatr en plural porque sino marca error
    protected $primaryKey = 'idMun'; //aqui se indica cual es la llave primaria. Le decimos que busque una llave primaria llamada:...
    protected $fillable=['idMun','nombre']; //atributos de la tabla
    public function clientes()
    {
        return $this->hasMany(Clientes::class, 'idMun', 'id');
    }

}
