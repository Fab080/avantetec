<div class="container">
	<div class="btn-common btn-about boton">
		<a href="/Productos-categoria?id=<?php echo $categoria_producto->id; ?>"><i class="fas fa-angle-left"></i> Regresar</a>
	</div>
	<div class="section-product">
		<div class="img-section">
			<img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/categorias_productos/<?php echo $producto->imagen; ?>" alt="<?php echo $producto->descripcion; ?>" class="image-product">
		</div>
		<div class="product-content">
			<h2><?php echo $producto->nombre; ?></h2>
			<p><span>Descripción: </span><?php echo $producto->descripcion; ?></p>
			<p><span>Categoría: </span><?php echo $categoria_producto->nombre; ?></p>
			<p><span>Especificaciones: </span><?php echo $producto->especificaciones ?></p>
		</div>
	</div>
	<div class="info-producto">

		<h2>¿Te interesa este producto?</h2>
		<p>Dejános tus datos y te contactaremos para brindarte mayor información.</p>
		<form action="/Datos-producto" method="POST" class="formulario">
			<input type="hidden" name="productoId" value="<?php echo $producto->id; ?>">

			<div class="campo">
				<label for="email">Correo Electrónico</label>
				<input type="email" name="email" placeholder="Tu Correo Electrónico">
			</div>
			<div class="campo">
				<label for="telefono">Teléfono</label>
				<input type="tel" name="telefono" placeholder="Tu Teléfono">
			</div>

			<input type="submit" value="Enviar">
		</form>
	</div>

	<div class="products-category">
		<h2>Productos Relacionados</h2>
		<div class="products">
			<?php foreach ($productos as $item) : ?>
				<a href="/Producto?id=<?php echo $item->id; ?>" class="categoria-producto case-study-thumb">
					<div class="img-section-product">
						<img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/categorias_productos/<?php echo $item->imagen; ?>" alt="<?php echo $item->descripcion; ?>" class="image-product">
					</div>
					<p><?php echo $item->nombre; ?></p>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</div>