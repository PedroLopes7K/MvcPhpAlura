<?php

use Alura\Cursos\Controller\CreateCourseController;
use Alura\Cursos\Controller\ListCoursesController;
use Alura\Cursos\Controller\InsertCourseController;
use Alura\Cursos\Controller\DeleteCourseController;
use Alura\Cursos\Controller\UpdateCourseController;

return [
  '/listar-cursos' => ListCoursesController::class,
  '/novo-curso' => CreateCourseController::class,
  '/salvar-curso' => InsertCourseController::class,
  '/excluir-curso' => DeleteCourseController::class,
  '/alterar-curso' => UpdateCourseController::class,
];
