<?php
class AuthController {
    public function login(){ require 'views/auth/login.php'; }

    public function login_submit(){
        require 'config/database.php';
        $email=$_POST['email']; $pass=$_POST['password'];
        $stmt=$db->prepare("SELECT * FROM usuarios WHERE email=?");
        $stmt->execute([$email]);
        $u=$stmt->fetch(PDO::FETCH_ASSOC);
        if($u && password_verify($pass,$u['password'])){
            $_SESSION['user']=$u;
            header("Location: dashboard");
        } else {
            echo "Credenciales incorrectas";
        }
    }

    public function register(){ require 'views/auth/register.php'; }

    public function register_submit(){
        require 'config/database.php';
        $stmt=$db->prepare("INSERT INTO usuarios(nombre,email,password,rol) VALUES(?,?,?,?)");
        $stmt->execute([$_POST['nombre'],$_POST['email'],password_hash($_POST['password'],PASSWORD_DEFAULT),'admin']);
        header("Location: login");
    }
}
?>
