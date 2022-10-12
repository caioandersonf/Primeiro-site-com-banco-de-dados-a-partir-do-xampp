<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bancodedados";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$email = $_POST['email'];
$password = $_POST['senha'];

$result_usuario = "INSERT INTO usuarios (email, senha) VALUES ('$email','$password')";

$resultado_usuario = mysqli_query($conn,$result_usuario);

header("location:index.php");

?>
