<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cadastro </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="" >
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Tecnotel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=registro">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=listar">Usuários</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?page=sobre">Sobre</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
          
          <?php 
              include("src/connection.php");

              switch (@$_REQUEST["page"]) {
              case 'registro':
                include("src/register.php");
                break;
              
              case 'listar':
                include("src/users.php");
                break;

              case 'save':
                include("src/save.php");
                break;

              case 'edit':
                include("src/edit.php");
                break;

              case 'sobre':
                include ("src/sobre.php");
                break;


              default:
                print "Bem Vindos";
                break;
            }
            #include("teste.php")
          ?>
        </div>
      </div>
    </div>


  </body>
</html>
