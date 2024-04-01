<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $primaryKey = 'AnimalID';

    protected $fillable = [
        'nombre',
        'especie_id',
        'cuidador_id'
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class, 'especie_id');
    }

    public function cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'cuidador_id');
    }

    public function animalRecinto()
    {
        return $this->hasOne(AnimalRecinto::class);
    }

    public function actividades()
    {
        return $this->belongsToMany(Actividad::class);
    }

    public function establecerNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function establecerEspecie(Especie $especie)
    {
        $this->especie()->associate($especie);
    }

    public function obtenerEspecie()
    {
        return $this->especie;
    }

    public function establecerCuidador(Cuidador $cuidador)
    {
        $this->cuidador()->associate($cuidador);
    }

    public function obtenerCuidador()
    {
        return $this->cuidador;
    }
}
