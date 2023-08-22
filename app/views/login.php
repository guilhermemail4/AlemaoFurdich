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

    <section class="bg-light text-dark text-center text-sm-start">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <img class="img-fluid d-none d-sm-block" src="app/assets/img/logoSmall.png" alt=""/>
            </div>

            <div class="container mt-5 mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <p class="lead text-center">Insira suas credenciais de aluno:</p>

                        <div class="card">
                            <div class="card-header text-center">
                                Dados do Aluno
                            </div>
                            <div class="card-body">
                                <form action="/path/to/your/login/script" method="post">
                                     <div class="form-group">
                                        <label for="email text">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha:</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class = "d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary mt-2 w-100">Entrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
        

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

    
    <script src="app/assets/js/scripts.js"></script>
</body>
</html>
