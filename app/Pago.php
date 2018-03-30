<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    public $timestamps = false;
    protected $table = 'pagos';
    protected $primaryKey = 'pag_id';
    protected $fillable = ['pag_cliente_id', 'pag_valor', 'pag_fecha', 'pag_nota'];
    
}
