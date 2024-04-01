<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;

    protected $primaryKey = 'EspecieID';

    protected $fillable = [
        'nombre',
        'tipoRecinto'
    ];

    public function animales()
    {
        return $this->hasMany(Animal::class, 'especie_id');
    }

    public function establecerNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function establecerTipoRecinto($tipoRecinto)
    {
        $this->tipoRecinto = $tipoRecinto;
    }

    public function obtenerTipoRecinto()
    {
        return $this->tipoRecinto;
    }
}
