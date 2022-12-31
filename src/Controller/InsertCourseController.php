<?php

namespace Pedro\Cursos\Controller;

use Pedro\Cursos\Entity\Curso;
use Pedro\Cursos\Infra\EntityManagerCreator;

class InsertCourseController  implements InterfaceRequestController
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

    // $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
    // $descricao = filter_input(
    //   INPUT_POST,
    //   'descricao',
    //   FILTER_SANITIZE_STRING
    // );

    // $curso = new Curso();
    // $curso->setDescricao($descricao);
    // $this->entityManager->persist($curso);
    // $this->entityManager->flush();

    // header('Location: /listar-cursos', true, 302);

    $descricao = filter_input(
      INPUT_POST,
      'descricao',
      FILTER_SANITIZE_STRING
    );

    $curso = new Curso();
    $curso->setDescricao($descricao);

    $id = filter_input(
      INPUT_GET,
      'id',
      FILTER_VALIDATE_INT
    );

    if (!is_null($id) && $id !== false) {
      $curso->setId($id);
      $this->entityManager->merge($curso);
      $_SESSION['mensagem'] = 'Curso atualizado com sucesso';
    } else {
      $this->entityManager->persist($curso);
      $_SESSION['mensagem'] = 'Curso inserido com sucesso';
    }
    $_SESSION['tipo_mensagem'] = 'success';
    $this->entityManager->flush();

    header('Location: /listar-cursos', true, 302);
  }
}
