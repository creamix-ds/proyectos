<?php include 'views/layout/header.php'; ?>
<h2>Nuevo servicio</h2>
<form method='POST' action='servicios_store'>
<input name='nombre' placeholder='Nombre'><br><br>
<textarea name='descripcion' placeholder='Descripción'></textarea><br><br>
<input name='duracion' placeholder='Duración (min)'><br><br>
<input name='precio' placeholder='Precio'><br><br>
<button>Guardar</button>
</form>
<?php include 'views/layout/footer.php'; ?>
