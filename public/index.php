<?php

require __DIR__ . '/../vendor/autoload.php';

use Pedro\Cursos\Controller\InterfaceRequestController;

if (!$_SERVER['PATH_INFO']) {
  header('Location: /login');
} else {
  $caminho = $_SERVER['PATH_INFO'];
  $rotas = require __DIR__ . '/../config/Routes.php';

  if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
  }
  session_start();

  $ehRotaDeLogin = stripos($caminho, 'login');
  if (!isset($_SESSION['logado']) && $ehRotaDeLogin === false) {
    header('Location: /login');
    exit();
  }

  $classeControladora = $rotas[$caminho];
  /** @var InterfaceRequestController $controlador */
  $controlador = new $classeControladora();
  $controlador->processaRequisicao();
}
