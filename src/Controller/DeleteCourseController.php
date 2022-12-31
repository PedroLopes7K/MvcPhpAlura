<?php

namespace Pedro\Cursos\Controller;

use Pedro\Cursos\Entity\Curso;
use Pedro\Cursos\Infra\EntityManagerCreator;

class DeleteCourseController implements InterfaceRequestController
{
  /**
   * @var \Doctrine\ORM\EntityManagerInterface
   */
  private $entityManager;

  public function __construct()
  {
    $this->entityManager = (new EntityManagerCreator())
      ->getEntityManager();
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

    $curso = $this->entityManager->getReference(
      Curso::class,
      $id
    );
    $this->entityManager->remove($curso);
    $this->entityManager->flush();
    header('Location: /listar-cursos');
  }
}
