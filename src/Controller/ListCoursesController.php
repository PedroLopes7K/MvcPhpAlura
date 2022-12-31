<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListCoursesController extends HtmlController implements InterfaceRequestController
{
  private $repositorioDeCursos;

  public function __construct()
  {
    $entityManager = (new EntityManagerCreator())
      ->getEntityManager();
    $this->repositorioDeCursos = $entityManager
      ->getRepository(Curso::class);
  }

  public function processaRequisicao(): void
  {
    // $cursos = $this->repositorioDeCursos->findAll();
    // $titulo = 'Lista de cursos';
    // require __DIR__ . '/../../view/courses/list-courses.php';

    echo $this->renderizaHtml('courses/list-courses.php', [
      'cursos' => $this->repositorioDeCursos->findAll(),
      'titulo' => 'Lista de cursos',
    ]);
  }
}
