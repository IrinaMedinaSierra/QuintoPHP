<?php
    include 'header.php';
?>
<h1>Formulario de Datos</h1>

<form method="get" action="lectura.php" class="formulario">
    <div>
        <p>
        <label for="nombre">Nombre:</label>
        <input id="nombre" maxlength="50" name="nombre" class="entradas">
        </p>
    </div>
    <div>
        <p>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" min="0" max="100" step="1" name="edad" class="entradas">
        </p>
    </div>
<div>
    <p class="pBoton">
        <input type="submit" value="Enviar" name="enviar" class="boton">
    </p>

</div>


</form>
<form method="post" action="lectura.php" class="formulario">
    <div>
        <p>
            <label for="apellidos">Apellido:</label>
            <input id="apellidos" maxlength="50" name="apellidos" class="entradas">
        </p>
    </div>
    <div>
        <p>
            <label for="altura">Altura:</label>
            <input type="number" id="altura" min="0" max="250" step="1" name="altura" class="entradas">
        </p>
    </div>
    <div>
        <p class="pBoton">
            <input type="submit" value="Enviar" name="enviar2" class="boton">
        </p>

    </div>


</form>


<?php
	include 'footer.php';
?>
</body>
</html>