<?php
    session_start();

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "bancodedados";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $email = $_POST['email'];
    $password = $_POST['senha'];

    $limita = "SELECT * FROM usuarios WHERE email = '$email'";

    $verifica = mysqli_query($conn, $limita);

    $contar = mysqli_num_rows($verifica);

    if ($contar >= '1'){

        header("location: aviso.php");
            

    }else{
            

        $result_usuario = "INSERT INTO usuarios (email, senha) VALUES ('$email','$password')";

        $resultado_usuario = mysqli_query($conn,$result_usuario);

        header("location:index.php");

    }

?>
