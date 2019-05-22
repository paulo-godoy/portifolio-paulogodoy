<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Estilo costomizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!-- HTML5Shiv -->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->

    <title>Paulo Godoy - Contato</title>
    <link rel="icon" href="imagens/favicon.png">
</head>
<body>
    <header><!-- Inicio cabecalho -->
        <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img class="img-fluid circle-img-logo" src="imagens/perfil.jpeg" width="100%" alt="Foto do logo">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <i class="fas fa-bars text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item divisor"></li>
                        <li class="nav-item"><a class="nav-link" href="#">Currículo</a></li>
                    </ul>
                </div>

            </div>
        </nav>

    </header><!-- Fim cabecalho -->
    <section class="d-flex" id="home"><!-- Inicio contato -->
        <div class="container align-self-center"><!-- Inicio container -->
            <div class="row"><!-- Inicio row -->
                <div class="col-md-12">
                    
                    <form action="mail_send.php" method="post">

                        <fieldset >
                            <label style="color: #fff;" for="email">Email:</label>
                            <input class="form-control mb-3" type="email" name="email" placeholder="Digite seu email" >
                        </fieldset>

                        <fieldset class="form-group">
                            <label style="color: #fff;" for="mensagem">Mensagem:</label>
                            <textarea class="form-control mb-3" nome="mensagem" rows="3"></textarea>
                        </fieldset>
                      
                        <fieldset>
                            <button class="btn-block" type="submit">Enviar</button>
                        </fieldset>
                    </form>
                </div>
            </div><!-- Fim row -->

        </div><!-- Fim container -->
    </section><!-- Fim contato -->




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contato</h4>
                    <i class="fas fa-mobile-alt"><span> 51-985862294</span></i><br>
                    <i class="fas fa-at"><span> pauloricardo.godoy@yahoo.com.br</span></i> 
                    
                </div>
            
                <div class="col-md-6">
                    <ul>
                        <li><a class="btn btn-outline-light ml-3" href="https://www.facebook.com/paulo.godoy.948" target="_blank"><i class="fab fa-facebook fa-lg"></i></a></li>
                        <li><a class="btn btn-outline-light ml-3" href="https://www.linkedin.com/in/paulo-ricardo-p-godoy-06577333" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a></li>
                        <li><a class="btn btn-outline-light ml-3" href="https://www.instagram.com/paulogodoy948" target="_blank"><i class="fab fa-instagram fa-lg"></i></a></li>
                        <li><a class="btn btn-outline-light ml-3" href="https://github.com/paulo-godoy?tab=repositories" target="_blank"><i class="fab fa-github-square fa-lg"></i></a></li>
                        <li><a class="btn btn-outline-light ml-3" href="https://wa.me/5551985862294?" target="_blank" title="Me chame pelo WhatsApp."><i class="fab fa-whatsapp-square fa-lg"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>