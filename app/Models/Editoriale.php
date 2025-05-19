<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Editoriale
 * 
 * @property string $codigo_editorial
 * @property string $nombre_editorial
 * @property string $contacto
 * @property string $telefono
 * 
 * @property Collection|Libro[] $libros
 *
 * @package App\Models
 */
class Editoriale extends Model
{
	protected $table = 'editoriales';
	protected $primaryKey = 'codigo_editorial';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre_editorial',
		'contacto',
		'telefono'
	];

	public function libros()
	{
		return $this->hasMany(Libro::class, 'codigo_editorial');
	}
}
