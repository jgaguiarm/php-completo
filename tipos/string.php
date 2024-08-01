<div class="titulo">Tipo String</div>

<?php
  echo 'Eu sou uma string';
  echo '<br>';
  var_dump("Eu também");

  // Concatenação
  echo "Nós também" . 'somos';
  echo '<br>', "Também aceito", "vírgulas";

  echo '<br>';
  echo "'Teste'" . '"Teste"' . '\'Teste\' ' . "\"Teste\"" . "\n";

  print("<br>Também existe a função print");
  print "<br>Também existe a função print";

  // Funções da String
  echo '<br>' . strtoupper('maximizado');
  echo '<br>' . strtolower('MINIMIZADO');
  echo '<br>' . ucfirst('só a primeira letra');
  echo '<br>' . ucwords('todas as palavras');
  echo '<br>' . strlen('Quantas letras?');
  echo '<br>' . mb_strlen("Eu também", "utf-8");
  echo '<br>' . substr('Só uma parte mesmo', 7, 6);
  echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');