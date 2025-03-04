
<style>
    .imagen {
        width: 20rem;
        height: auto;
        margin: 0 auto;
        border: .1rem blue solid;
        padding: 2rem;
        border-radius: 2rem;
    }
    form {
        margin: auto;
        display: flex;
        flex-direction: column;
        width: 60%;
    }

    input {
        padding: 1rem;
        margin: 1rem 0 1rem 0;
    }
    label {
        text-transform: uppercase;
    }
</style>

<div class="imagen">
    <img src="<?php echo $_ENV['ROUTE_DIRECTORY']; ?>build/images/categorias_productos/<?php echo $producto->imagen; ?>">
</div>
<form method="POST">
    <h1>Actualizar</h1>

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $producto->nombre; ?>">

    <label for="descripcion">Descripcion</label>
    <input type="text" id="descripcion" name="descripcion" value="<?php echo $producto->descripcion; ?>">

    <label for="especificaciones">Especificaciones</label>
    <input type="text" id="especificaciones" name="especificaciones" value="<?php echo $producto->especificaciones; ?>">

    <input type="submit" value="Actualizar">

</form>