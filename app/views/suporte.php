<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alemão Für Dich</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../app/assets/css/styles.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="/home" class="navbar-brand">Alemão Für Dich</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/suporte" class="nav-link">Suporte</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cursos" class="nav-link">Inscrever</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                </ul> 
            </div>

        </div>
    </nav>

    <div class="container mt-5">
    <h2 class="text-center mb-5">Suporte ao Cliente</h2>

    <div class="row">
        <!-- Imagem à esquerda -->
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="app/assets/img/pagSuporte.png" alt="Suporte" class="img-fluid">
        </div>
        <!-- Informações e formulário à direita -->
        <div class="col-md-6 pt-5">
            <!-- Informações de contato -->
            <div class="mb-4">
                <h4>Informações de Contato</h4>
                <p><strong>Telefone:</strong> (00) 1234-5678</p>
                <p><strong>E-mail:</strong> suporte@empresa.com.br</p>
                <p><strong>Endereço:</strong> Rua Exemplo, 123 - Bairro, Cidade - Estado, CEP: 00000-000</p>
            </div>

            <!-- Formulário para enviar uma mensagem -->
            <div class="form-container">
                <h4>Envie-nos uma mensagem</h4>
                <form action="/enviar-email" method="post"> <!-- A action precisa ser a URL adequada do servidor que processará o envio do e-mail -->
                    <div class="form-group">
                        <label for="nome">Seu Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Seu E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary d-block mx-auto">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Serviços</h3>
                        <ul>
                            <li><a href="#">Mensalidade</a></li>
                            <li><a href="#">Cursos</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Sobre Nós</h3>
                        <ul>
                            <li><a href="#">Escola</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Alemão Für Dich</h3>
                        <p>Nossa missão é ajudar você a realizar seus sonhos. Venha fazer parte dessa incrível escola. </p>
                    </div>
                    
                </div>
                <p class="copyright">Alemão Für Dich © 2023</p>
            </div>
        </footer>
    </div>

<!-- Adicionando o JavaScript do Bootstrap 4 via CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
