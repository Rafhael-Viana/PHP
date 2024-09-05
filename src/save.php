<?php


switch ($_REQUEST["acao"]) {

  case 'cadastrar':
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $data_nasc = $_POST["data_nasc"];

    $sql = "INSERT INTO usuarios(nome, email, senha, data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";
    $res = $conn -> query($sql);

    if($res == true){
      print "
      <script>
        alert('Cadastro realizado com sucesso.')
        location.href='?page=listar';
      </script>
      ";
    } else {
      print "
      <script>
        alert('Não foi possível realizar o seu cadastro.')
        location.href='?page=listar';
      </script>
      ";
    }
    break;

  case 'edit':
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $data_nasc = $_POST["data_nasc"];

    $sql = "UPDATE usuarios SET nome='{$nome}',email='{$email}',senha='{$senha}',data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"];
    $res = $conn -> query($sql);

    if($res == true){
      print "
      <script>
        alert('Editado com sucesso.')
        location.href='?page=listar';
      </script>
      ";
    } else {
      print "
      <script>
        alert('Não foi possível editar o seu cadastro.')
        location.href='?page=listar';
      </script>
      ";
    }
    break;

  case 'delete':
    
    $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn -> query($sql);

    if($res == true){
      print "
      <script>
        alert('Excluído com sucesso.')
        location.href='?page=listar';
      </script>
      ";
    } else {
      print "
      <script>
        alert('Não foi possível excluir o seu cadastro.')
        location.href='?page=listar';
      </script>
      ";
    }
    break;

  default:
    # code...
    break;
}
