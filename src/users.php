<?php

print "<h1 class='mb-4'>Usuários</h1>";

$sql = "SELECT * FROM usuarios";
$res = $conn -> query($sql);
$qtd = $res -> num_rows;

if($qtd > 0) {
  print "<table class='table table-hover'>";
  print "<tr>";
  print "<th>#</th>";
  print "<th>Nome</th>";
  print "<th>Email</th>";
  print "<th>Data de Nascimento</th>";
  print "</tr>";
  while($row = $res -> fetch_object()){
    print "<tr>";
    print "<td>".$row -> id."</td>";
    print "<td>".$row -> nome."</td>";
    print "<td>".$row -> email."</td>";
    print "<td>".$row -> data_nasc."</td>";
    print "<td><button onclick=\"location.href= '?page=edit&id=".$row->id."';\" class='btn btn-primary mr-4'>Editar</button>
          <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href= '?page=save&acao=delete&id=".$row->id."';}else{false;}\" class='btn btn-danger mr-2'>Excluir</button></td>";
    print "</tr>";

  }
  print "</table>";
} else {
  print "<p class=alert alert-danger>Não foram encontrados resultados!</p>";
}
