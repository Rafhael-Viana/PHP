<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cadastro </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../vendor/twbs/bootstrap/site/assets/scss/"> -->
  </head>
  <body>

    <div class="">
      <form method="POST" action="?page=save" class = "p-4 ">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" name="senha" class="form-control">
        </div>
        <div class="mb-3">
            <label for="data_nasc" class="form-label">Data de Nascimento</label>
            <input type="date" name="data_nasc" class="form-control">
        </div>
        <!-- <div class="mb-3 form-check"> -->
        <!--   <input type="checkbox" class="form-check-input" id="checkbox" required> -->
        <!--   <label class="form-check-label" for="checkbox">Concordo com os termos sugeridos nos "Termos de Contrato".</label> -->
        <!-- </div> -->
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
