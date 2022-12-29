<?php

use Alura\Cursos\Controller\CreateCourseController;
use Alura\Cursos\Controller\ListCoursesController;
use Alura\Cursos\Controller\InsertCourseController;

return [
  '/listar-cursos' => ListCoursesController::class,
  '/novo-curso' => CreateCourseController::class,
  '/salvar-curso' => InsertCourseController::class,
];
