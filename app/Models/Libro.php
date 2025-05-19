<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 * 
 * @property string $codigo_libro
 * @property string $nombre_libro
 * @property int $existencias
 * @property float $precio
 * @property string $codigo_autor
 * @property string $codigo_editorial
 * @property int $id_genero
 * @property string|null $descripcion
 * @property string|null $imagen
 * 
 * @property Autore $autore
 * @property Editoriale $editoriale
 * @property Genero $genero
 *
 * @package App\Models
 */
class Libro extends Model
{
	protected $table = 'libros';
	protected $primaryKey = 'codigo_libro';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'existencias' => 'int',
		'precio' => 'float',
		'id_genero' => 'int'
	];

	protected $fillable = [
		'nombre_libro',
		'existencias',
		'precio',
		'codigo_autor',
		'codigo_editorial',
		'id_genero',
		'descripcion',
		'imagen'
	];

	public function autore()
	{
		return $this->belongsTo(Autore::class, 'codigo_autor');
	}

	public function editoriale()
	{
		return $this->belongsTo(Editoriale::class, 'codigo_editorial');
	}

	public function genero()
	{
		return $this->belongsTo(Genero::class, 'id_genero');
	}
}
