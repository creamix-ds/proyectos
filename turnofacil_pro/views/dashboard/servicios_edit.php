<?php include 'views/layout/header.php'; ?>
<h2>Editar servicio</h2>
<form method='POST' action='servicios_update'>
<input type='hidden' name='id' value='<?= $s['id'] ?>'>
<input name='nombre' value='<?= $s['nombre'] ?>'><br><br>
<textarea name='descripcion'><?= $s['descripcion'] ?></textarea><br><br>
<input name='duracion' value='<?= $s['duracion'] ?>'><br><br>
<input name='precio' value='<?= $s['precio'] ?>'><br><br>
<button>Actualizar</button>
</form>
<?php include 'views/layout/footer.php'; ?>
