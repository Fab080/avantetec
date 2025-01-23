<?php include_once __DIR__ . '/../templates/pagina.php'; ?>

<div class="service-section">
	<h2 class="title-products">Categorías</h2>

	<p class="description-categories">Got a project in mind? We’d love to hear about it. Take five minutes to fill
		out our project form so that we can get to know you and understand your project</p>

	<div class="container container-categorias">
		<?php foreach ($categorias as $categoria) : ?>
			<a href="/Productos-categoria?id=<?php echo $categoria->id; ?>" class="categoria-producto case-study-thumb">
				<img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/categories/<?php echo $categoria->imagen; ?>" alt="<?php echo $categoria->descripcion; ?>" class="image-categorie">
				<p>
					<span><?php echo $categoria->nombre; ?></span> <br>
					<?php echo $categoria->descripcion; ?>
				</p>
			</a>
		<?php endforeach; ?>
	</div>
</div>