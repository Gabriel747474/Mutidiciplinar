<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/sobre.css"> <!-- Link para seu CSS -->
    <title>Sobre - Kevyn e os Kevyns</title>
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
            <a href="produto.php">    
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
    <main>
        <div class="container-fluid">
            <div class="d-flex no-gutters">


                <div class="image-container">
                    <a href="Animal/animal.php">
                        <img src="imagens/fundo.png" alt="cachorro" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="caption">Bem Animal</div>
                </div>
                </a>


            


              

            
        </div>
    </main>
    <br>

    <aside class="somos">
        <h2 style="color: rgb(61, 52, 48);
    font-weight: bold;">Quem nós somos? </h2>

        <h3 >kevyn e os Kevyns!</h3>

        <p>Somos uma empresa com o desejo de tornar a vida de nossos pets e clientes mais fáceis e práticas. 
            Graças aos nossos sistemas de veterinária totalmente inovadores e atualizados, proporcionamos uma 
            experiência única e inesquecível, para todos os nossos clientes.</p>
          

    </aside>

    <aside class="missão">
        <br><br>
        <h2 style="color: rgb(61, 52, 48);
        font-weight: bold;">Qual é nossa missão?</h2>

        <p>Nossa missão é tornar não só a nossa própria clínica, mas todos os nossos atendimentos e inovações,
             em uma coisa que já mais irão esquecer. Pretendemos fazer com que sua experiência 
            em colocar seu pet em nossas mãos, seja mais do que apenas um tratamento de saúde.</p>

    </aside>
<br>
    <aside class="porque">
        <h2 style="font-weight: bolder;">Por que escolher a Kevyn e os Kevyns?</h2>
            <p>Além de proporcionarmos uma experiência inesquecível, nosso sistema é 
                totalmente confiável e seguro, protegemos suas informações e seus dados com o máximo de segurança e 
                controle, para que nunca possam ser acessados ou vazados.</p>
                
            <h3 >Junte-se a nossa clínica e faça parte de nossa história</h3>
               

    </aside>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>