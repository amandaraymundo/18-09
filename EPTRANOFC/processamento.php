<?php

include ('dbconnect.php');

$id = '';
$nome = '';
$sobrenome = '';
$usuario = '';
$email = '';
$senha = '';
$acao = $_POST['acao'];

if (!empty($_POST['id'])){
    $id = $_POST['id'];
}

if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
}

if(!empty($_POST['sobrenome'])){
    $nome = $_POST['sobrenome'];
}

if(!empty($_POST['usuario'])){
    $usuario = $_POST['usuario'];
}

if (!empty($_POST['email'])){
    $email = $_POST['email'];
}

if (!empty($_POST['senha'])){
    $senha = $_POST['senha'];
}


if ($acao == 'Enviar'){ 
    $insert = "INSERT INTO usuarios(usuario, senha, email, nome, sobrenome) 
    VALUES('$usuario', '$senha', '$email', '$nome', '$sobrenome')"; 
    $executar_insert = mysqli_query($conn, $insert); 
    // echo "Cadastro Concluído"; 
} else if ($acao == 'Alterar'){ 
    $update = "UPDATE usuarios SET nome = '$nome' , sobrenome = '$sobrenome', usuario = '$usuario', 
    email = '$email', senha = '$senha'
    WHERE id = '$id'";
    $executar_update = mysqli_query($conn, $update);
    if ($executar_update){ 
        echo "Alteração concluída";
    } else {
        echo "Erro na alteração! " . mysqli_error($conn);
    } if ($acao = "Excluir"){
    $delete = "DELETE FROM usuarios WHERE id = '$id'";
    $executar_delete = mysqli_query($conn,$delete);
        if ($executar_delete){ 
            echo "Exclusão concluída";
        } else {
            echo "Erro na exclusão! " . mysqli_error($conn);
        }
} else {
    echo "Nenhuma ação executada!";
}
    
} 
header("Location: cadastro.php");

?>