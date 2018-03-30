<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    public $timestamps = false;
    protected $table = 'ventas';
    protected $primaryKey = 'vnt_id';
    protected $fillable = ['vnt_cliente_id','vnt_valor','vnt_valor_cancelado', 'vnt_saldo', 'vnt_fecha', 'vnt_nota'];
    
}
