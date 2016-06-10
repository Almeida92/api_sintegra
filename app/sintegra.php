<?php 
namespace api_sintegra;

use Illuminate\Database\Eloquent\Model; 

class Sintegra extends Model {

	protected $table = 'sintegra';

	protected $fillable = ['id_usuario', 'cnpj', 'json'];

	public $timestamps = false;

}