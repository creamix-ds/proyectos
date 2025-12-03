<?php include 'views/layout/header.php'; ?>
<h2>Servicios</h2>
<a href='servicios_create'>Nuevo servicio</a>
<table border=1 cellpadding=8>
<tr><th>ID</th><th>Nombre</th><th>Duración</th><th>Precio</th><th>Acciones</th></tr>
<?php foreach($srv as $s): ?>
<tr>
<td><?= $s['id'] ?></td>
<td><?= $s['nombre'] ?></td>
<td><?= $s['duracion'] ?> min</td>
<td>$<?= $s['precio'] ?></td>
<td>
<a href='servicios_edit&id=<?= $s['id'] ?>'>Editar</a>
<a href='servicios_delete&id=<?= $s['id'] ?>'>Eliminar</a>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php include 'views/layout/footer.php'; ?>
