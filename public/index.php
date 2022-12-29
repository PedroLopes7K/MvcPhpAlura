<?php


require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\CreateCourseController;
use Alura\Cursos\Controller\ListCoursesController;

switch ($_SERVER['PATH_INFO']) {
  case '/listar-cursos':
    $controlador = new ListCoursesController();
    $controlador->processaRequisicao();
    break;
  case '/novo-curso':
    $controlador = new CreateCourseController();
    $controlador->processaRequisicao();
    break;
  default:
    echo "Erro 404";
    break;
}
