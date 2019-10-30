<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">

    <title>Curso de bootstrap 4</title>
  </head>
  <body>
    <!-- Menu de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
        <div class="container">
            <!-- logo do site -->
            <a class="navbar-brand h1 mb-0" href="#">Curso</a>
            <!-- Botão para chamar menu responsivo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu principal -->
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./perfil">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./depoimentos">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact">Contato</a>
                    </li>

                </ul>
                <!-- Submenu de redes sociais -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Social</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Twitter</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                        </div>
                    </li>                    
                </ul>
                <!-- Campo de Busca-->
                <form class="form-inline">
                    <input type="search" class="form-control ml-4 mr-2" placeholder="Burscar...">
                    <button class="btn btn-dark" type="Submit">Ok</button>
                </form>

            </div>
        </div>

    </nav>
    <?php
    if(isset($_SESSION['usuario'])){
        ?><h3>Bem vindo, <?php echo $_SESSION['usuario'];?></h3>
          <a href="config/logout.php">Fazer logout</a><?php }?>
