<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Style/Animal/animal.css"> <!-- Link para seu CSS -->
    <title>Kevyn e os Kevyns</title>
</head>

<body>
    =<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> <!-- Adicionando fixed-top -->
        <button type="button" class="btn btn-link text-light mr-2">
            <img src="../imagens/logo.png" alt="menu" class="img-fluid">
        </button>
        <a class="navbar-brand" href="../principal.php">Kevyn e os Kevyns</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
               
                <li class="nav-item">
                    <a class="nav-link" href="../sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contato.php">Contato</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

            <div class="btn-group mx-3" role="group" aria-label="Basic example">
            <a href="../consulta.php">    
            <button type="button" class="btn btn-link text-light">Marcar consulta</button>
            </a>
                
                    <button type="button" class="btn btn-link text-light">

                        <img src="../imagens/Shopping cart.png" alt="Cadastrar Produto" class="img-fluid">
                    </button>

            </div>

            <a href="../cadastro.php">
                <div class="perfil">
                    <button type="button" class="btn btn-link text-light ml-3">
                        <img src="../imagens/Generic avatar.png" alt="Perfil" class="img-fluid">
                    </button>
                </div>
            </a>
        </div>
    </nav>
    <main>
        <div class="container-fluid">
            <div class="d-flex no-gutters">


                <div class="image-container">
                    <a href="animal.php">
                        <img src="../imagens/fundo.png" alt="animal" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="caption">Bem Animal</div>
                </div>
                </a>





            </div>
        </div>
    </main>

    <aside>
        <h2>Animais</h3>
            <ul style="font-size: 25px; font-weight: bold;">Tipos</ul>
            <a href="#"><li style="font-weight: bold;">Cachorro</li></a>
            <a href="#"><li>Gato</li></a>
            <a href="#"><li>Coelho</li></a>
            <a href="#"><li>Passarinho</li></a>
            <a href="#"><li>Furão</li></a>
            
            <div class="container">
        <div id="preco">R$ 50,00</div>
        <input type="range" id="precoSlider" min="0" max="500" value="100" class="slider">
    </div>

    <script>
        const precoDisplay = document.getElementById("preco");
        const precoSlider = document.getElementById("precoSlider");

        precoSlider.addEventListener("input", function() {
            let valor = precoSlider.value;
            precoDisplay.innerText = `R$ ${parseFloat(valor).toFixed(2)}`;
        });
    </script>

    </aside>

    <div class="produto">
        <img class="garrafa" src="../imagens/clinica.jpg">

        <p class="descrição">Marque a consulta </p>

        <p class="preço">R$ 50, <sub>00</sub></p>

        <input type="number" id="qtde_1" min="1" value="1">
        <button class="comprar" onclick="adicionarAoCarrinho(1, 'qtde_1')">Comprar</button>

        <p class="endereco">São Paulo, Jardim Nordeste </p>
    </div>

    <footer></footer>

    <script>
        function adicionarAoCarrinho(idProduto, qtdeId) {
            const quantidade = document.getElementById(qtdeId).value;
            
            fetch('../controllers/adicionar_ao_carrinho.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    idProduto: idProduto,
                    qtde: parseInt(quantidade)
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(' consulta adicionado ao carrinho!');
                    window.location.href = '../carrinho.php';
                } else {
                    alert(data.error || 'Erro ao adicionar consulta ao carrinho');
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert('Erro ao adicionar consulta ao carrinho');
            });
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>