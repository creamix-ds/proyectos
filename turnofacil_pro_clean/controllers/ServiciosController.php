<?php
class ServiciosController{
    public function index(){
        require 'config/database.php';
        $srv=$db->query("SELECT * FROM servicios")->fetchAll(PDO::FETCH_ASSOC);
        require 'views/dashboard/servicios.php';
    }
    public function create(){ require 'views/dashboard/servicios_create.php'; }
    public function store(){
        require 'config/database.php';
        $stmt=$db->prepare("INSERT INTO servicios(nombre,descripcion,duracion,precio) VALUES(?,?,?,?)");
        $stmt->execute([$_POST['nombre'],$_POST['descripcion'],$_POST['duracion'],$_POST['precio']]);
        header("Location: servicios");
    }
    public function edit(){
        require 'config/database.php';
        $stmt=$db->prepare("SELECT * FROM servicios WHERE id=?");
        $stmt->execute([$_GET['id']]);
        $s=$stmt->fetch(PDO::FETCH_ASSOC);
        require 'views/dashboard/servicios_edit.php';
    }
    public function update(){
        require 'config/database.php';
        $stmt=$db->prepare("UPDATE servicios SET nombre=?,descripcion=?,duracion=?,precio=? WHERE id=?");
        $stmt->execute([$_POST['nombre'],$_POST['descripcion'],$_POST['duracion'],$_POST['precio'],$_POST['id']]);
        header("Location: servicios");
    }
    public function delete(){
        require 'config/database.php';
        $stmt=$db->prepare("DELETE FROM servicios WHERE id=?");
        $stmt->execute([$_GET['id']]);
        header("Location: servicios");
    }
}
?>