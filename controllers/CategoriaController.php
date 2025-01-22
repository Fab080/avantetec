<?php

namespace Controllers;

use Model\Categoria;

class CategoriaController {
    public static function index() {
        $categorias = Categoria::all();
        echo json_encode($categorias);
    }
}