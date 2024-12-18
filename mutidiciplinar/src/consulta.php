<?php
require_once '../vendor/autoload.php';

use App\model\Produto;

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $qtd = $_POST['qtd'] ?? '';
    $descricao= $_POST['descricao'] ?? '';

   
    $user = new Produto($nome, $qtd, $descricao);

  
    $mensagem = $user->cadastrar_produto();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/cadastro.css">
    <!-- Adicionando o Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcar Consulta</title>
</head>

<body>
    <!-- Barra de Navegação -->
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

    <!-- Formulário de Cadastro -->
    <div class="login-container" style="margin-top: 80px;"> <!-- Ajustando a margem superior para dar espaço ao nav -->
        <h2>Marque a consulta</h2>
        <form method="POST" action="">
            <input type="text" name="nome" placeholder="Insira o nome do animal" required>
            <input type="text" name="qtd" placeholder="Insira o nome do dono " required>
            <input type="text" name="descricao"  placeholder="Insira a descrição da doença" required >
           <a hreff="carrinho.php" ><button type="submit">Marcar consulta</button></a>
        </form>
    </div>

    <!-- Adicionando o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php if ($mensagem): ?>
            <div class="message <?php echo strpos($mensagem, 'sucesso') !== false ? 'success' : 'error'; ?>">
                <?php echo htmlspecialchars($mensagem); ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>