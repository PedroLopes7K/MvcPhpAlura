<?php

namespace Alura\Cursos\Controller;

class CreateCourseController extends HtmlController implements InterfaceRequestController
{
  public function processaRequisicao(): void
  {
    // $titulo = 'Novo curso';
    // require __DIR__ . '/../../view/courses/create.php';

    echo $this->renderizaHtml('courses/create.php', [
      'titulo' => 'Novo curso'
    ]);
  }
}
