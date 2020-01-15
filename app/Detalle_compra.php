<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_compra extends Model
{
    protected $table='detalle_compras';
    protected $primaryKey='id';
    protected $fillable =[
        'compra_id',
        'nombre',
        'precio',
        'categoria_id'
    ];

    public function compras(){
        return $this->belongsTo('App\Compra');
    }
}
