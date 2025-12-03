<?php
class TurnosController{
    public function index(){
        require 'config/database.php';
        $t=$db->query("SELECT t.*, u.nombre usuario, s.nombre servicio FROM turnos t 
                       JOIN usuarios u ON t.usuario_id=u.id
                       JOIN servicios s ON t.servicio_id=s.id")->fetchAll(PDO::FETCH_ASSOC);
        require 'views/dashboard/turnos.php';
    }
    public function create(){
        require 'config/database.php';
        $srv=$db->query("SELECT * FROM servicios")->fetchAll(PDO::FETCH_ASSOC);
        require 'views/dashboard/turnos_create.php';
    }
    public function store(){
        require 'config/database.php';
        $stmt=$db->prepare("INSERT INTO turnos(usuario_id,servicio_id,fecha,hora,estado) VALUES(?,?,?,?,?)");
        $stmt->execute([1,$_POST['servicio'],$_POST['fecha'],$_POST['hora'],'pendiente']);
        header("Location: turnos");
    }
}
?>
