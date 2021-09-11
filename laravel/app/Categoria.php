<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='paciente';

    protected $primaryKey='id_paciente';
    public $timestamps=false;


    protected $fillable =[
    	'id_expediente',
        'nombre',
        'apellido_pa',
        'apellido_ma',
        'fecha_naci',
        'lugar_naci',
        'pais',
        'estado',
        'ciudad',
        'codigo_postal',
        'colonia',
        'calle',
        'numero_inter',
        'numero_exte',
        'celular',
        'lada',
        'telefono',
        'condicion',
    ];

    protected $guarded =[

    ];

}
