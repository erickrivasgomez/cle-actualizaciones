<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'vigente'
    ];
    //
    public function actualizaciones()
    {
        return $this->hasMany('App\Actualizacion', 'id_periodo');
    }
}
