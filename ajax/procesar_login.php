<?php
    session_start();

    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        header("Content-Type: application/json");
        $array_devolver=[];
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];

        // comprobar si el user existe 
        $buscar_user = $con->prepare("SELECT * FROM usuarios WHERE username = '$username' LIMIT 1");
        $buscar_user->bindParam(':username', $username, PDO::PARAM_STR);
        $buscar_user->execute();

        if($buscar_user->rowCount() == 1){
            // Existe
            $user = $buscar_user->fetch(PDO::FETCH_ASSOC);
            $user_id = (int) $user['user_id'];
            $hash = (string) $user['password'];
            if(password_verify($password,$hash)){
                $_SESSION['user_id']=$user_id;
                if(isset($_SESSION['user_id'])){
                    $array_devolver['redirect'] ='http://localhost/php/admin.php';
                }
                
            }else{
                $array_devolver['error']="Los datos no son validos.";
                session_destroy();
            }

        }else{
        $array_devolver['error']="Usuario o contraseña invalida.";
        }

        echo json_encode($array_devolver);

    }else{
        exit("Fuera de aquí");
    }
?>