<?php

include ('dbconnect.php');
session_start();

if(isset($_POST['acao'])){
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$login = "SELECT * FROM usuarios WHERE (usuario = '$usuario' OR email = '$usuario') AND senha = '$senha';";

$executar_login = mysqli_query($conn, $login);

if(mysqli_num_rows($executar_login) > 0){
    $dados_usuario = mysqli_fetch_assoc ($executar_login);
    $_SESSION['usuario'] = $dados_usuario['usuario'];
    $_SESSION['id'] = $dados_usuario['id'];
    $_SESSION['nome'] = $dados_usuario['nome'];
    header('Location: cadastro.php');
} else {
    header('Location: index.html');
}
}

?>  