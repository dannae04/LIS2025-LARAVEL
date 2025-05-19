<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Autore
 * 
 * @property string $codigo_autor
 * @property string $nombre_autor
 * @property string $nacionalidad
 * 
 * @property Collection|Libro[] $libros
 *
 * @package App\Models
 */
class Autor extends Model
{
	protected $table = 'autores';
	protected $primaryKey = 'codigo_autor';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre_autor',
		'nacionalidad'
	];

	public function libros()
	{
		return $this->hasMany(Libro::class, 'codigo_autor');
	}
}
