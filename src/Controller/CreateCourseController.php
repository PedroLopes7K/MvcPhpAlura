<?php

namespace Alura\Cursos\Controller;

class CreateCourseController implements InterfaceRequestController
{
  public function processaRequisicao(): void
  {
    $titulo = 'Novo curso';
    require __DIR__ . '/../../view/courses/create.php';
  }
}
