<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalRecinto extends Model
{
    use HasFactory;

    protected $primaryKey = 'AnimalRecintoID';

    protected $fillable = [
        'RecintoID',
        'AnimalID',
        'descripcion',
        'fechaHora'
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'AnimalID');
    }

    public function recinto()
    {
        return $this->belongsTo(Recinto::class, 'RecintoID');
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
