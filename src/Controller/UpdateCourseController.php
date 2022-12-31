<?php

namespace Pedro\Cursos\Controller;

use Pedro\Cursos\Entity\Curso;
use Pedro\Cursos\Infra\EntityManagerCreator;

class UpdateCourseController extends HtmlController implements InterfaceRequestController
{
  /**
   * @var \Doctrine\Common\Persistence\ObjectRepository
   */
  private $repositorioCursos;

  public function __construct()
  {
    $entityManager = (new EntityManagerCreator())
      ->getEntityManager();
    $this->repositorioCursos = $entityManager
      ->getRepository(Curso::class);
  }

  public function processaRequisicao(): void
  {
    $id = filter_input(
      INPUT_GET,
      'id',
      FILTER_VALIDATE_INT
    );

    if (is_null($id) || $id === false) {
      header('Location: /listar-cursos');
      return;
    }

    $curso = $this->repositorioCursos->find($id);

    // exibindo o buffer retornado
    //              usando a msm view do create como update
    echo $this->renderizaHtml('courses/create.php', [
      'curso' => $curso,
      'titulo' => 'Alterar curso ' . $curso->getDescricao(),
    ]);
  }
}
