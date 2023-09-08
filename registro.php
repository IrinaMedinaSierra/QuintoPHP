<?php
	include 'header.php';
    $nombre=$_GET['nombre'];
    $email=$_GET['email'];
?>
<div class="registro">
    <h2>Gracias <i><?=$nombre?></i> por contactar con nosotros</h2>
    <p>En breve recibiras un email a <i><?=$email?></i>.</p>
</div>

<?php
	include 'footer.php';
?>
</body>
</html>