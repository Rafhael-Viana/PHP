
<?php
  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
  $res = $conn -> query($sql);
  $row = $res -> fetch_object();
?>
    <h1 class='m-4'>Editar Usuário</h1>

    <div class="">
      <form method="POST" action="?page=save" class = "p-4 ">

        <input type="hidden" name="acao" value = "edit">
        <input type="hidden" name="id" value = "<?php print $row -> id; ?>">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" value ="<?php print $row -> nome; ?>" class="form-control">
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" value="<?php print $row -> email; ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" name="senha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="data_nasc" class="form-label">Data de Nascimento</label>
            <input type="date" name="data_nasc" value="<?php print $row -> data_nasc; ?>" class="form-control">
        </div>
        <!-- <div class="mb-3 form-check"> -->
        <!--   <input type="checkbox" class="form-check-input" id="checkbox" required> -->
        <!--   <label class="form-check-label" for="checkbox">Concordo com os termos sugeridos nos "Termos de Contrato".</label> -->
        <!-- </div> -->
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>

