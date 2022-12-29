<?php

// fazer log de todas as requisições
// echo "<pre>";
// var_dump($_SERVER['PATH_INFO']);
// echo "</pre>";
switch ($_SERVER['PATH_INFO']) {
  case '/listar-cursos':
    require 'listar-cursos.php';
    break;
  case '/novo-curso':
    require 'formulario-novo-curso.php';
    break;
  default:
    echo "Erro 404";
    break;
}
