<?php
require_once '../vendor/autoload.php';
include "./model/Login.php";
use App\model\Login;

use App\model\Usuario;
$mensagem = '';




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $user = new Login($nome, $senha);
    $mensagem = $user->entrar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="manifest" href="pwa/manifest.json">
    <title>Login</title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> <!-- Adicionando fixed-top -->
        <button type="button" class="btn btn-link text-light mr-2">
            <img src="imagens/logo.png" alt="menu" class="img-fluid">
        </button>
        <a class="navbar-brand" href="principal.php">Kevyn e os Kevyns</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
               
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

            <div class="btn-group mx-3" role="group" aria-label="Basic example">
            <a href="consulta.php">    
            <button type="button" class="btn btn-link text-light">Marcar consulta</button>
            </a>
                
                    <button type="button" class="btn btn-link text-light">

                    <a href="carrinho.php"><img src="imagens/Shopping cart.png" alt="Cadastrar Produto" class="img-fluid"></a>
                    </button>

            </div>

            <a href="cadastro.php">
                <div class="perfil">
                    <button type="button" class="btn btn-link text-light ml-3">
                        <img src="imagens/Generic avatar.png" alt="Perfil" class="img-fluid">
                    </button>
                </div>
            </a>
        </div>
    </nav>

    
       <div class="login">
        <form method="POST" action="">
        <h2>Login</h2>    
        
        
        <input type="text" name="nome" placeholder="Insira seu nome" required>
        
<br><br>
        
        <input type="password" name="senha" placeholder="Insira sua senha" required>


        <button class="cadastrar" type="submit">Entrar</button>
            <br><br>
        
            <a href="cadastro.php">Fazer Cadastro </a>   
             </form>
        <?php if ($mensagem): ?>
            <div class="message <?php echo strpos($mensagem, 'sucesso') !== false ? 'success' : 'error'; ?>">
                <?php echo htmlspecialchars($mensagem); ?>
                </div>
        <?php endif; ?>
    </div>
</body>
</html>