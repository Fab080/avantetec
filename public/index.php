<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\CategoriaController;
use Controllers\PaginasController;
use MVC\Router;

$router = new Router();

$router->get('/', [PaginasController::class, 'index']);
$router->get('/Contacto', [PaginasController::class, 'contacto']);
$router->post('/Contacto', [PaginasController::class, 'contacto']);
$router->get('/Quienes-somos', [PaginasController::class, 'quienesSomos']);
// $router->get('/blog', [PaginasController::class, 'blog']);
$router->get('/Cotizar', [PaginasController::class, 'cotizar']);
$router->get('/Productos', [PaginasController::class, 'productos']);
$router->get('/Productos-categoria', [PaginasController::class, 'categorias']);
$router->get('/Producto', [PaginasController::class, 'producto']);
$router->get('/Buscar', [PaginasController:: class, 'buscar']);
$router->post('/Datos-producto', [PaginasController:: class, 'enviarFormularioProducto']);

$router->get('/Not-found', [PaginasController::class, 'notFound']);

// Api
$router->get('/api/categorias', [CategoriaController::class, 'index']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();