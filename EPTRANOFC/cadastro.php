<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <title>Cadastro</title>
</head>
<header>
        <div class="header-links">
            <div class="logos">
                <a href="https://www.joinville.sc.gov.br/" &gt;&gt> <img src="imagens/Logo1.png" alt="" class="logo1"></a>
                <a href="../telainicial/index.html" &gt;&gt> <img src="imagens/Logo2.png" alt="" class="logo2"></a>
            </div>
            <div id="main">
                <div class="openbtn" onclick="openNav()">☰</div>  
            </div>
            <div id="mySidebar" class="navbar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="../telainicial/index.html">Home</a>
                <a href="../categorias/indexsobrenos.html">Sobre Nós</a>
                <a href="../categorias/">Atividades</a>
                <a href="../categorias/indexcontato.html">Contato</a>
                <a href="../login/eptran.html">Entrar</a>
              </div>
            </div>
    </header>
<body>
    <a href="logout.php" >SAIR</a>
    <p> Olá, <?php session_start();
    echo $_SESSION['nome']?> </p>
    <h1>Cadastro Cliente</h1><br><br><br>
    
    <form action="processamento.php" method="post">

        <label for="id">Código:</label>
        <input type="number" name="id" placeholder="Digite o código do cliente"><br>
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Digite o nome do cliente"><br>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" placeholder="Digite o sobrenome do cliente"><br>
        
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" placeholder="Digite o nome do usuario"><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Digite o email do cliente"><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Digite a senha do cliente"><br>
        
        <input type="submit" name="acao" value="Enviar">
        <input type="submit" name="acao" value="Alterar">
        <input type="submit" name="acao" value="Excluir">
    
    </form>



</body>
</html>