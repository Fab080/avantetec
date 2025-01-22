<?php

namespace Model;

class Producto extends ActiveRecord {
    protected static $tabla = 'productos';
	protected static $columnasDB = ['id', 'nombre', 'descripcion', 'especificaciones', 'imagen', 'categoriasId'];

	public $id;
    public $nombre;
    public $descripcion;
    public $especificaciones;
    public $imagen;
    public $categoriasId;


	public function __construct($args = [])
	{
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->especificaciones = $args['especificaciones'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->categoriasId = $args['categoriasId'] ?? null;
	}
}