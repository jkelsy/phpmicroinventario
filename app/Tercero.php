<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    //
    public $timestamps = false;
    protected $table = 'terceros';
    protected $primaryKey = 'ter_id';
    protected $fillable = ['ter_nombre','ter_direccion','ter_telefono', 'ter_saldo'];
    
}
