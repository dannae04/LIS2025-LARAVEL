<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Genero
 * 
 * @property int $id_genero
 * @property string $nombre_genero
 * @property string $descripcion
 * 
 * @property Collection|Libro[] $libros
 *
 * @package App\Models
 */
class Genero extends Model
{
	protected $table = 'generos';
	protected $primaryKey = 'id_genero';
	public $timestamps = false;

	protected $fillable = [
		'nombre_genero',
		'descripcion'
	];

	public function libros()
	{
		return $this->hasMany(Libro::class, 'id_genero');
	}
}
