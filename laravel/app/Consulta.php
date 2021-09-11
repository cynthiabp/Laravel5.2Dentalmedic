<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
      protected $table='consulta';

    protected $primaryKey='id_consulta';
    public $timestamps=false;


    protected $fillable =[
    	
        'id_paciente',
        'id_tratamiento',
        'fecha_consulta',
        'descripcion',
        'condicion',
    ];

    protected $guarded =[

    ];
}
