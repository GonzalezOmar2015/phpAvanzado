<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';
    protected $timestamps=false;

    protected $fillable=[
    	'nombre',
    	'descripcion',
    	'condicion'
    ];

    protected $guarded = [

    ];
}
