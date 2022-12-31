<?php

namespace Alura\Cursos\Controller;

abstract class HtmlController
{
  public function renderizaHtml(string $caminhoTemplate, array $dados): string
  {
    // recebe um array associativo e define variáveis para cada chave
    extract($dados);

    // salvando e retornando o buffer (todo o html retornado pelo require)
    ob_start();
    require __DIR__ . '/../../view/' . $caminhoTemplate;
    $html = ob_get_clean();

    return $html;
  }
}
