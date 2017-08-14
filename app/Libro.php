<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $fillable = ['titulo', 'anio', 'tipo', 'isbn', 'numero_edicion'];

    public function autores()
    {
        return $this->belongsToMany('App\Autor')->withTimestamps();
    }

    public function areas()
    {
        return $this->belongsToMany('App\AreaConocimiento')->withTimestamps();
    }
    public function usuarios()
    {
        return $this->belongsToMany('App\Usuario')->withTimestamps();
    }

}