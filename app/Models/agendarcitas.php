<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendarcitas extends Model
{
    use HasFactory;
    protected $table = 'agendarcitas'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idCita';
    protected $fillable = [
        'idCli',
        'fecha',
        'hora',
    ]; 
    public $timestamps = false; // Si la tabla no tiene columnas de timesta
}
