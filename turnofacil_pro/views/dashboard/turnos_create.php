<?php include 'views/layout/header.php'; ?>
<h2>Nuevo turno</h2>
<form method='POST' action='turnos_store'>
<select name='servicio'>
<?php foreach($srv as $s): ?>
<option value='<?= $s['id'] ?>'><?= $s['nombre'] ?></option>
<?php endforeach; ?>
</select><br><br>
<input type='date' name='fecha'><br><br>
<input type='time' name='hora'><br><br>
<button>Guardar</button>
</form>
<?php include 'views/layout/footer.php'; ?>
