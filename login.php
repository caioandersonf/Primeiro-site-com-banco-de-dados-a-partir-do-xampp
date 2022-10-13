<?php
    session_start();
    include_once("conexao.php");

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
   
        $sql = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);

        if(empty($resultado)){
            $_SESSION['msg'] = "E-mail ou senha estão incorretos";
            header("Location: vazio.php");
                
        }elseif(!empty($resultado)){

            $_SESSION['usuarioId'] = $resultado['id'];
            header("Location: menu.php");

        }
    }
    else{
        $_SESSION['msg'] = "E-mail ou senha estão incorretos";
        header("Location: vazio.php");
        
    }
?>
