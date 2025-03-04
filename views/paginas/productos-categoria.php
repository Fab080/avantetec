<?php include_once __DIR__ . '/../templates/pagina.php'; ?>

<div class="products-content container">
    <div class="categories">
        <form action="/Buscar" class="search-bar" method="post">
            <input type="text" name="buscar" placeholder="Buscar...">
            <input type="submit" class="button-search" value="Buscar">
        </form>
        <ul>
            <li class="expand">
                <a class="menu_hide10 title-categorias" href="#">
                    <div><span class="line-marked"></span>Categorías &#x2b;</div>
                    <!-- <div class="menu-toggle2">
						<div class="icon2">
							<span class="plus">+</span>
							<span class="minus">-</span>
						</div>
					</div> -->
                </a>
                <ul class="menu_open10 sub-menu2 categories-list">
                    <?php foreach ($categorias as $categoria) : ?>
                    <li class="category">
                        <a class="<?php echo $categoria->id === $_GET['id'] ? 'activo' : ''; ?>" href="/Productos-categoria?id=<?php echo $categoria->id; ?>">
                            - <?php echo $categoria->nombre; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>

    </div>

    <div class="products-list">
        <?php foreach ($productos as $producto) : ?>
        <a href="/Producto?id=<?php echo $producto->id; ?>" class="producto case-study-thumb">
            <img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/categorias_productos/<?php echo $producto->imagen; ?>"
                alt="<?php echo $producto->descripcion; ?>" class="image-product">
            <p>
                <span><?php echo $producto->nombre; ?></span> <br>
                <?php echo $producto->descripcion; ?>
            </p>
        </a>
        <?php endforeach; ?>
    </div>
</div>