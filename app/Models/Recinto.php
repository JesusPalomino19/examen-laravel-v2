<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    use HasFactory;

    protected $primaryKey = 'RecintoID';

    protected $fillable = [
        'nombre',
        'tipo',
        'capacidad',
        'necesidadesEspecíficas'
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }

    public function animalRecintos()
    {
        return $this->hasMany(AnimalRecinto::class);
    }

    public function recinto()
    {
        return $this->belongsTo(Recinto::class, 'RecintoID');
    }

    public function establecerNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function establecerTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function obtenerTipo()
    {
        return $this->tipo;
    }

    public function establecerCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }

    public function obtenerCapacidad()
    {
        return $this->capacidad;
    }

    public function establecerNecesidadesEspecíficas($necesidadesEspecificas)
    {
        $this->necesidadesEspecíficas = $necesidadesEspecificas;
    }

    public function obtenerNecesidadesEspecíficas()
    {
        return $this->necesidadesEspecíficas;
    }
}
