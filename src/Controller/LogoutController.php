<?php

namespace Pedro\Cursos\Controller;

class LogoutController implements InterfaceRequestController
{
  public function processaRequisicao(): void
  {
    session_destroy();
    header('Location: /login');
  }
}
