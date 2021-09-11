<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
     protected $table='cita';

    protected $primaryKey='id_cita';
    public $timestamps=false;


    protected $fillable =[
    	
        'id_paciente',
        'nombre',
        'fecha',
    	'horainicio',
        'horafin',
        'telefono',
    	'descripcion',
        'condicion',
       

    ];

    protected $guarded =[

    ];
}
