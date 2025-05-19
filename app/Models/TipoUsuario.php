<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoUsuario
 * 
 * @property int $id_tipo_usuario
 * @property string $tipo_usuario
 * 
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class TipoUsuario extends Model
{
	protected $table = 'tipo_usuarios';
	protected $primaryKey = 'id_tipo_usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_tipo_usuario' => 'int'
	];

	protected $fillable = [
		'tipo_usuario'
	];

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_tipo_usuario');
	}
}
