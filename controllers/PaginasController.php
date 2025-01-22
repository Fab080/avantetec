<?php

namespace Controllers;

use Model\Categoria;
use Model\Producto;
use MVC\Router;

class PaginasController {

    public static function index(Router $router) {
        $inicio = true;
		$categorias = Categoria::all();

        $router->render('paginas/index', [
			'categorias' => $categorias,
			'nombre_pagina' => 'Home',
            'inicio' => $inicio
        ]);
    }

    public static function contacto(Router $router) {
        $categorias = Categoria::all();

        $router->render('paginas/contacto', [
			'categorias' => $categorias,
			'nombre_pagina' => 'Contacto'
        ]);
    }

    public static function quienesSomos(Router $router) {
        $categorias = Categoria::all();

        $router->render('paginas/quienes-somos', [
			'categorias' => $categorias,
			'nombre_pagina' => 'Quiénes Somos'
        ]);
    }

    public static function blog(Router $router) {
        $categorias = Categoria::all();

        $router->render('paginas/blog', [
			'categorias' => $categorias,
			'nombre_pagina' => 'Blog'
        ]);
    }
	public static function notFound(Router $router)
	{
		$router->render('paginas/not-found', [
			'nombre_pagina' => '404 - No encontrado'
        ]);
	}

    public static function cotizar(Router $router) {
        $categorias = Categoria::all();       

        $router->render('paginas/cotizar', [
			 'categorias' => $categorias,
			'nombre_pagina' => 'Cotizar'
        ]);
    }

    public static function productos(Router $router) {

        $categorias = Categoria::all();
        
        $router->render('paginas/productos', [
            'categorias' => $categorias,
			'nombre_pagina' => 'Nuestros Productos'
        ]);
    }

    public static function categorias(Router $router) {

        $categoriaId = $_GET['id'];

        $categorias = Categoria::all();
        $categoria = Categoria::find($categoriaId);

		if (!$categoria) {
			header('Location: /productos');
		}

        $consulta = " SELECT * FROM productos WHERE productos.categoriasId = '{$categoriaId}' ";

		$productos = Producto::SQL($consulta);
        
        $router->render('paginas/productos-categoria', [
            'categoria' => $categoria,
			'nombre_pagina' => $categoria->nombre,
			'categorias' => $categorias,
			'productos' => $productos
        ]);
    }

	public static function producto(Router $router)
	{
		$productoId = $_GET['id'];

        $categorias = Categoria::all();
		$producto = Producto::find($productoId);
		$categoria_producto = Categoria::find($producto->categoriasId);

		$router->render('paginas/producto', [
			'categorias' => $categorias,
			'nombre_pagina' => $producto->nombre, 	
			'producto' => $producto,
			'categoria_producto' => $categoria_producto
		]);
	}

	public static function buscar() {
		echo "Buscando";
	}
}