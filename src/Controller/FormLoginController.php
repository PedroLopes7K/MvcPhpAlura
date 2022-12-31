<?php

namespace Pedro\Cursos\Controller;

class FormLoginController extends HtmlController implements InterfaceRequestController
{
  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('login/form-login.php', [
      'titulo' => 'Login'
    ]);
  }
}
