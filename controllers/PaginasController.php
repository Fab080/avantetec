<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Categoria;
use Model\Producto;
use MVC\Router;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController
{

	public static function index(Router $router)
	{
		$inicio = true;
		$categorias = Categoria::all();

		$router->render('paginas/index', [
			'categorias' => $categorias,
			'nombre_pagina' => 'Home',
			'inicio' => $inicio
		]);
	}

	public static function contacto(Router $router)
	{
		$categorias = Categoria::all();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$respuestas = $_POST['contacto'];

			$mail = new PHPMailer();
			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
			// $mail->SMTPDebug = 2;
			$mail->isSMTP();
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "ssl";
			$mail->Host = 'smtp.hostinger.com';
			$mail->Port = 465;
			$mail->CharSet = 'UTF-8';
			$mail->Username = 'info@avantesolucionestec.com.co';
			$mail->Password = 'AvanteST,2025*';

			$mail->setFrom('info@avantesolucionestec.com.co');
			$mail->addAddress('ventas@avantesolucionestec.com.co', 'avantesolucionestec.com.co');
			$mail->SMTPKeepAlive = true;
			$mail->Mailer = "smtp";
			$mail->Subject = 'Información de Contacto';

			// Set HTML
			$mail->isHTML(true);


			$contenido = '<html>';
			$contenido .= '<p>Tienes un Nuevo Mensaje</p>';
			$contenido .= '<p>Nombre: ' . $respuestas['nombre'] . ' </p>';
			$contenido .= '<p>Email: ' . $respuestas['email'] . ' </p>';
			$contenido .= '<p>Telefono: ' . $respuestas['telefono'] . ' </p>';
			$contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] . ' </p>';
			$contenido .= '</html>';

			$mail->Body = $contenido;

			// Enviar el email
			// if ($mail->send()) {
			// 	header('Location: /');
			// }
			// $mail->send();

			if (!$mail->send()) {
				debuguear('Mailer error: ' . $mail->ErrorInfo);
			} else {
				header('Location: /');
			}
		}

		$router->render('paginas/contacto', [
			'categorias' => $categorias,
			'nombre_pagina' => 'Contacto'
		]);
	}

	public static function quienesSomos(Router $router)
	{
		$categorias = Categoria::all();

		$router->render('paginas/quienes-somos', [
			'categorias' => $categorias,
			'nombre_pagina' => 'Quiénes Somos'
		]);
	}

	public static function blog(Router $router)
	{
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

	public static function cotizar(Router $router)
	{
		$categorias = Categoria::all();

		$router->render('paginas/cotizar', [
			'categorias' => $categorias,
			'nombre_pagina' => 'Cotizar'
		]);
	}

	public static function productos(Router $router)
	{

		$categorias = Categoria::all();

		$router->render('paginas/productos', [
			'categorias' => $categorias,
			'nombre_pagina' => 'Nuestros Productos'
		]);
	}

	public static function categorias(Router $router)
	{
		$categoriaId = $_GET['id'];
		$categorias = Categoria::all();

		$categoria = Categoria::find($categoriaId);

		if (!$categoria) {
			header('Location: /productos');
		}

		$pagina_actual = $_GET['page'];
		$pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

		if (!$pagina_actual || $pagina_actual < 1) {
			header('Location: /Productos-categoria?id='.$categoria->id.'&page=1');
		}

		$registros_por_pagina = 6;
		$total = Producto::totalWhere('categoriasId', $categoria->id);
		$paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total, $categoria->id);

		if ($paginacion->total_paginas() < $pagina_actual) {
			header('Location: /Productos-categoria?id='.$categoria->id.'&page=1');
		}
		
		$productos = Producto::paginarWhere($registros_por_pagina, $paginacion->offset(), 'categoriasId', $categoria->id);

		$router->render('paginas/productos-categoria', [
			'categoria' => $categoria,
			'nombre_pagina' => $categoria->nombre,
			'categorias' => $categorias,
			'productos' => $productos,
			'paginacion' => $paginacion->paginacion()
		]);
	}

	public static function producto(Router $router)
	{
		$productoId = $_GET['id'];

		$categorias = Categoria::all();
		$producto = Producto::find($productoId);

		if (!$producto) {
			header('Location: /Not-found');
		}

		$query = " SELECT * FROM productos WHERE categoriasId = " . $producto->categoriasId . " AND productos.id != " . $producto->id . " LIMIT 4 ";

		$productos = Producto::SQL($query);

		$categoria_producto = Categoria::find($producto->categoriasId);

		$router->render('paginas/producto', [
			'categorias' => $categorias,
			'nombre_pagina' => $producto->nombre,
			'producto' => $producto,
			'categoria_producto' => $categoria_producto,
			'productos' => $productos
		]);
	}

	public static function enviarFormularioProducto()
	{
		if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
			header('Location: /Not-found');
		}

		$producto = Producto::find($_POST['productoId']);

		$categoria = Categoria::where('id', $producto->categoriasId);

		$mail = new PHPMailer();
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);
		// $mail->SMTPDebug = 2;
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = 'smtp.hostinger.com';
		$mail->Port = 465;
		$mail->CharSet = 'UTF-8';
		$mail->Username = 'info@avantesolucionestec.com.co';
		$mail->Password = 'AvanteST,2025*';

		$mail->setFrom('info@avantesolucionestec.com.co');
		$mail->addAddress('ventas@avantesolucionestec.com.co', 'avantesolucionestec.com.co');
		$mail->SMTPKeepAlive = true;
		$mail->Mailer = "smtp";
		$mail->Subject = 'Información de Interesado por ' . $producto->nombre;

		// Set HTML
		$mail->isHTML(true);

		$contenido = '<html>';
		$contenido .= '<p>Tienes un Nuevo Mensaje</p>';
		$contenido .= '<p>El usuario está interesado por el producto: '. $producto->nombre.'</p>';
		$contenido .= '<p>Email: ' . $_POST['email'] . ' </p>';
		$contenido .= '<p>Telefono: ' . $_POST['telefono'] . ' </p>';
		$contenido .= '<p>Producto: ' . $producto->nombre . ' </p>';
		$contenido .= '<p>Categoría: ' . $categoria->nombre . ' </p>';
		$contenido .= '</html>';

		$mail->Body = $contenido;

		if (!$mail->send()) {
			debuguear('Mailer error: ' . $mail->ErrorInfo);
		} else {
			header('Location: /');
		}
	}

	public static function buscar()
	{
		echo "Buscando";
	}
}
