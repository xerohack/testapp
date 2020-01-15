<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table='compras';
    protected $primaryKey='id';
    protected $fillable =[
        'cantidad',
        'producto'
    ];

    public function categorias(){
        return $this->belongsTo('App\Cotegoria');
    }

    public function detallecompras(){
        return $this->belongsTo('App\Detalle_compra');
    }
}
