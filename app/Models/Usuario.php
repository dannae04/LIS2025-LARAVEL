<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property string $usuario
 * @property int $activo
 * @property string $password
 * @property int $id_tipo_usuario
 * 
 * @property TipoUsuario $tipo_usuario
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'activo' => 'int',
		'id_tipo_usuario' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'activo',
		'password',
		'id_tipo_usuario'
	];

	public function tipo_usuario()
	{
		return $this->belongsTo(TipoUsuario::class, 'id_tipo_usuario');
	}
}
