<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
 protected $table='tratamiento';

    protected $primaryKey='id_tratamiento';
    public $timestamps=false;


    protected $fillable =[
    	'nombre',
        'precio',
        'condicion',
    ];

    protected $guarded =[

    ];
}
