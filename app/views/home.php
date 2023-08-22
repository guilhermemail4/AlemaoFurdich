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

    <section class="bg-light text-dark p-6 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1><span class="text-dark-emphasis">Bem vindo a <span class="text-danger">Alemão</span> <span class="text-warning">Für Dich !</span></span></h1>
                    <p class="lead my-4">
                        Seja bem vindo a nossa escola de ensino de língua alemã ! 
                        Nossa missão é ajudar você a desenvolver a tão sonhada fluência nesse idioma. 
                        Clique no botão abaixo para conhecer os nossos cursos.
                    </p>
                    <button onclick="location.href='app/views/aluno/register.php'" class="btn btn-primary btn-lg">Conheça Nossos Cursos</button>
                </div>
                <img class="img-fluid w-60 d-none d-sm-block" src="app/assets/img/logo.png" alt=""/>
            </div>
        </div>
    </section>

    <section class="bg-dark text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Se inscreva em nossa Newsletter</h3>

                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Insira o email"/>
                    <button class="btn btn-dark btn-lg" type="button">Inscrever</button>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-warning p-5 text-dark text-center text-sm-start">
        <div class="container">
            <div class="d-flex">
                <div class="card text-dark text-center mx-3">
                    <img src="app/assets/img/tiktok.png" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Tik Tok</h5>
                      <p class="card-text">Veja nossos vídeos gratuitos de língua alemã no nosso perfil do Tik Tok !</p>
                    </div>
                </div>

                <div class="card text-dark text-center mx-3">
                    <img src="app/assets/img/facebook.png" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Facebook</h5>
                      <p class="card-text">Faça parte da maior comunidade de língua alemã do Facebook !</p>
                    </div>
                </div>

                <div class="card text-dark text-center mx-3">
                    <img src="app/assets/img/instagram.png" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Instagram</h5>
                      <p class="card-text">Siga nosso perfil no Instagram para aprender palavras novas todos os dias !</p>
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
