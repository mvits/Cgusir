<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $fillable = ['titulo', 'anio', 'tipo', 'isbn', 'editorial', 'numero_edicion'];

    public function autores()
    {
        return $this->belongsToMany('App\Autor', 'libro_autor', 'libro_id', 'autor_id')->withTimestamps();
    }

    public function areas()
    {
        return $this->belongsToMany('App\AreaConocimiento', 'libro_area', 'libro_id', 'area_id')->withTimestamps();
    }
    public function usuarios()
    {
        return $this->belongsToMany('App\Usuario')->withTimestamps();
    }

    public function scopeBusquedaRecursos($query, $titulo)
    {
        return $query->where('titulo', 'ILIKE', "%$titulo%");
    }

}
