<?php

namespace Model;

class Categoria extends ActiveRecord {
    protected static $tabla = 'categorias';
	protected static $columnasDB = ['id', 'nombre', 'descripcion', 'imagen'];

	public $id;
    public $nombre;
    public $descripcion;
    public $imagen;

	public function __construct($args = [])
	{
		
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
	}
}