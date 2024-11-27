<?php
/*
ELABORADO POR: Lizbeth Huitzil Leal
FECHA: 26-11-2024
DESCRIPCCIÓN: Modelo de la tabla provedoes de la base de datos.
*/
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provedoes extends Model
{
    use HasFactory;
    protected $primaryKey = 'idPro'; 
    protected $fillable = ['nombre','tel', 'correo', 'direccion'];
}
