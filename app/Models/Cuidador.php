<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;

    protected $primaryKey = 'CuidadorID';

    protected $fillable = [
        'nombre',
        'edad',
        'genero',
        'especialidad',
        'animales'
    ];

    public function animales()
    {
        return $this->hasMany(Animal::class, 'cuidador_id');
    }

    public function establecerNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function establecerEdad($edad)
    {
        $this->edad = $edad;
    }

    public function obtenerEdad()
    {
        return $this->edad;
    }

    public function establecerGenero($genero)
    {
        $this->genero = $genero;
    }

    public function obtenerGenero()
    {
        return $this->genero;
    }

    public function establecerEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }

    public function obtenerEspecialidad()
    {
        return $this->especialidad;
    }

    public function establecerAnimales($animales)
    {
        $this->animales = $animales;
    }

    public function obtenerAnimales()
    {
        return $this->animales;
    }
}
