<?php
    include 'header.php';
?>
<script src="js/script.js"></script>
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
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="entradas">
        </p>
    </div>
<div>
    <p class="pBoton">
        <input type="submit" value="Enviar" name="enviar" class="boton">
    </p>

</div>


</form>


<?php
	include 'footer.php';
?>
</body>
</html>