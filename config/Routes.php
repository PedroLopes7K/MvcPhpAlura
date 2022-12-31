<?php

use Pedro\Cursos\Controller\CreateCourseController;
use Pedro\Cursos\Controller\ListCoursesController;
use Pedro\Cursos\Controller\InsertCourseController;
use Pedro\Cursos\Controller\DeleteCourseController;
use Pedro\Cursos\Controller\FormLoginController;
use Pedro\Cursos\Controller\LoginController;
use Pedro\Cursos\Controller\LogoutController;
use Pedro\Cursos\Controller\UpdateCourseController;

return [
  '/listar-cursos' => ListCoursesController::class,
  '/novo-curso' => CreateCourseController::class,
  '/salvar-curso' => InsertCourseController::class,
  '/excluir-curso' => DeleteCourseController::class,
  '/alterar-curso' => UpdateCourseController::class,
  '/login' => FormLoginController::class,
  '/realiza-login' => LoginController::class,
  '/logout' => LogoutController::class,
];
