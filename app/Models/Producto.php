<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{

  static $rules = [
    'codigo' => 'required',
    'nombre' => 'required',
    'descripcion' => 'required',
    'precio' => 'required',
    'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['codigo','nombre', 'descripcion', 'precio', 'imagen'];
}
