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

    <img src="../assets/img/garantia.png" alt="Imagem de Garantia" class="curso-imagem">

    <form>
        
    <div class="container mt-5">
    <h2 class="lead text-center">Preencha os campos corretamente:</h2>
    <div class="form-container">
        <form>
             <!-- Nome Completo -->
        <div class="form-group">
            <label for="nomeCompleto">Nome completo:</label>
            <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" required>
        </div>

        <!-- Documento de Identificação -->
        <div class="form-group">
            <label for="documento">Documento de Identificação:</label>
            <input type="text" class="form-control" id="documento" name="documento" required>
        </div>

        <!-- Endereço -->
        <div class="form-group">
            <label for="rua">Endereço - Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua" required>
        </div>
        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" required>
        </div>
        <div class="form-group">
            <label for="pais">País:</label>
            <input type="text" class="form-control" id="pais" name="pais" required>
        </div>
        <div class="form-group">
            <label for="codigoPostal">Código Postal:</label>
            <input type="text" class="form-control" id="codigoPostal" name="codigoPostal" required>
        </div>

        <!-- Checkbox para pagamentos automáticos -->
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="pagamentosAutomaticos" name="pagamentosAutomaticos">
            <label class="form-check-label" for="pagamentosAutomaticos">Desejo optar por pagamentos automáticos</label>
        </div>
        </form>
    </div>
</div>

    <button type="submit" class="btn btn-primary mt-3 d-block mx-auto mb-5">Inscrever</button>
    </form>
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
