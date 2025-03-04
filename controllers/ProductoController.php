<?php

namespace Controllers;

use Model\Categoria;
use Model\Producto;
use MVC\Router;

class ProductoController
{
    public static function actualizarProducto(Router $router)
    {
        $producto = Producto::find($_GET['id']);
        $categorias = Categoria::all();

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $producto->sincronizar($_POST);

            $alertas = $producto->validar();

            if (empty($alertas)) {
                $producto->guardar();
                header('Location: /Productos-categoria?id='.$producto->categoriasId);
            }
        }


        $router->render('paginas/actualizar-producto', [
            'producto' => $producto,
            'categorias' => $categorias, 
            'alertas' => $alertas
        ]);
    }
}