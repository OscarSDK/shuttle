<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class punto extends Model {

	protected $fillable = ['cod_hotel', 'nombre_hotel','direccion','telefono','email'];
}