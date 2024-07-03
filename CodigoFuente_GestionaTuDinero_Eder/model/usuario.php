<?php
class Usuario extends Base
{
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Elimina el espacio sobrante y el código html del input
    public function checkInput($var)
    {
        $var = htmlspecialchars($var);
        $var = trim($var);
        $var = stripslashes($var);
        return $var;
    }

    // Registro de usuarios
    public function login($nombreUsuario, $password)
    {
        $stmt = $this->pdo->prepare("SELECT UsuarioId FROM usuario WHERE NombreUsuario = :nombreusuario AND Password = :password");
        $stmt->bindParam(":nombreusuario", $nombreUsuario, PDO::PARAM_STR);
        $hash = md5($password);
        $stmt->bindParam(":password", $hash, PDO::PARAM_STR);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
        $contador = $stmt->rowCount();

        if ($contador > 0) {

            $_SESSION['UsuarioId'] = $usuario->UsuarioId;
            header("Location: vista-controlador/3-Panel.php");
        } else {
            return false;
        }
    }

    // Comprueba si el correo electrónico ya existe
    public function checkEmail($email)
    {
        $stmt = $this->pdo->prepare("SELECT UsuarioId FROM usuario WHERE Email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
        $contador = $stmt->rowCount();
        if ($contador > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Comprueba si el nombre de usuario ya existe
    public function checkNombreUsuario($nombreUsuario)
    {
        $stmt = $this->pdo->prepare("SELECT UsuarioId FROM usuario WHERE NombreUsuario = :nombreusuario");
        $stmt->bindParam(":nombreusuario", $nombreUsuario, PDO::PARAM_STR);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
        $contador = $stmt->rowCount();
        if ($contador > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Devuelve la ruta de la foto de perfil de la base de datos por id de usuario
    public function FotoFetch($UsuarioId)
    {
        $stmt = $this->pdo->prepare("SELECT Foto FROM usuario WHERE UsuarioId = :UsuarioId");
        $stmt->bindParam(":UsuarioId", $UsuarioId, PDO::PARAM_INT);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
        return $usuario->Foto;
    }


    // Cierra la sesión de un usuario
    public function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL . 'index.php');
    }

    // Comprueba si un usuario ha iniciado sesión
    public function loggedIn()
    {
        if (isset($_SESSION['UsuarioId'])) {
            return true;
        }
        return false;
    }

    // Devuelve todos los datos de un usuario
    public function datosUsuario($usuario_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE UsuarioId = :usuario_id");
        $stmt->bindParam(":usuario_id", $usuario_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
