<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaConocimiento extends Model
{
    protected $table = 'areas_conocimientos';

    protected $fillable = ['nombre', 'descripcion'];

    public function libros()
    {

        return $this->belongsToMany('App\Libro')->withTimestamps();

    }
}
