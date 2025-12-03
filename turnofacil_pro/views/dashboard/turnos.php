<?php include 'views/layout/header.php'; ?>
<h2>Turnos</h2>
<a href='turnos_create'>Nuevo turno</a>
<table border=1 cellpadding=8>
<tr><th>ID</th><th>Usuario</th><th>Servicio</th><th>Fecha</th><th>Hora</th><th>Estado</th></tr>
<?php foreach($t as $x): ?>
<tr>
<td><?= $x['id'] ?></td>
<td><?= $x['usuario'] ?></td>
<td><?= $x['servicio'] ?></td>
<td><?= $x['fecha'] ?></td>
<td><?= $x['hora'] ?></td>
<td><?= $x['estado'] ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php include 'views/layout/footer.php'; ?>
