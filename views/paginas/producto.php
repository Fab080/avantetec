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
</div>