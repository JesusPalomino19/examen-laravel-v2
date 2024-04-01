<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $primaryKey = 'ActividadID';

    protected $fillable = [
        'nombre',
        'descripción',
        'fechaHora'
    ];

    public function animales()
    {
        return $this->belongsToMany(Animal::class);
    }

    public function establecerNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function establecerDescripción($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function obtenerDescripción()
    {
        return $this->descripcion;
    }

    public function establecerFechaHora($fechaHora)
    {
        $this->fechaHora = $fechaHora;
    }

    public function obtenerFechaHora()
    {
        return $this->fechaHora;
    }
}
